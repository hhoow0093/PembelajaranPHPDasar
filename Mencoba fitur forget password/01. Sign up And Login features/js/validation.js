const validation = new JustValidate('#sign-up');

validation
    .addField('#username', [
        {
            rule: "required"
        }
    ])
    .addField('#email', [
        {
            rule: "required",
        },
        {
            rule: "email",
        },
        {
            validator: (value) => () => {
                fetch("validateEmail.php?email=" + encodeURIComponent(value))
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (json) {
                        return json.available;
                    });
            },
            errorMessage: "email had already been taken!",
        }
    ])
    .addField('#password', [
        {
            rule: "required",
        },
        {
            rule: "minLength",
            value: 8,
        }
    ])
    .addField('#confirm-password', [
        {
            validator: (value, fields) => {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "password ahould match!",
        }
    ])
    .onSuccess((event) => {
        document.getElementById("sign-up").submit(); 
    });