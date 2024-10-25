$(document).ready(function () {
  // hilangkan tombol cari
  $("#tombol-cari").hide();

  // event ketika keyword ditulis
  $("#keyword").keyup(function (e) {
    // memnunculkan loader
    $(".loader").show();

    //ajax menggunakan load
    // ubah container berdasarkan input user
    // $("#container").load(`../ajax/mahasiswa.php?keyword=${$("#keyword").val()}`);

    $.get(
      `../ajax/mahasiswa.php?keyword=${$("#keyword").val()}`,
        function (data) {
            $("#container").html(data);
            $(".loader").hide();
          
      });
  });
});
