//* DataTables - JS Library (Table's Data)
$(document).ready(function () {
    var thetable = $('.dataTables').DataTable({
        stateSave: true,
        language: {
            "pagingType": "full_numbers",
            "zeroRecords": "Tidak ada data yang sesuai",
            "emptyTable": "Tidak ada data yang tersedia",
            "lengthMenu": 'Tampilkan&emsp;<select>' +
                '<option value="10">10</option>' +
                '<option value="25">25</option>' +
                '<option value="50">50</option>' +
                '<option value="100">100</option>' +
                '<option value="-1">Semua</option>' +
                '</select>&emsp;entri',
            "search": "Cari&emsp;",
            "searchPlaceholder": "Telusuri Leaderboard",
            "info": "Menampilkan halaman <strong>_PAGE_</strong> dari <strong>_PAGES_</strong>",
            "infoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
            "infoFiltered": "(dari total <strong>_MAX_</strong> data)"
        }
    });
});

$(document).ready(function () {
    var peringkat = $('.leaderboard').dataTable({
        destroy: true,
        ordering: false,
        stateSave: true,
        language: {
            "pagingType": "full_numbers",
            "zeroRecords": "Tidak ada data yang sesuai",
            "emptyTable": "Tidak ada data yang tersedia",
            "lengthMenu": 'Tampilkan&emsp;<select>' +
                '<option value="10">10</option>' +
                '<option value="25">25</option>' +
                '<option value="50">50</option>' +
                '<option value="100">100</option>' +
                '<option value="-1">Semua</option>' +
                '</select>&emsp;entri',
            "search": "Cari&emsp;",
            "searchPlaceholder": "Telusuri Leaderboard",
            "info": "Menampilkan halaman <strong>_PAGE_</strong> dari <strong>_PAGES_</strong>",
            "infoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
            "infoFiltered": "(dari total <strong>_MAX_</strong> data)"
        }
    });
});
