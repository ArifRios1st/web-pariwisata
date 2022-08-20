require('./bootstrap');

import Alpine from 'alpinejs';
import $ from 'jquery';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'datatables.net-dt/js/dataTables.dataTables';
import 'datatables.net-responsive-dt/js/responsive.dataTables.js';
import ClassicEditor from '../vendor/ckeditor/ckeditor'

window.Alpine = Alpine;
Alpine.start();

window.$ = window.jQuery = $;

$('.datepicker').datepicker({
    changeDay: true,
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd',
    yearRange: '1950:2050',
    monthNames: [
        'Januari',
        'Febuari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ],
    monthNamesShort: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    ],
    dayNames: [
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
    ],
    dayNamesShort: [
        'Min',
        'Sen',
        'Sel',
        'Rab',
        'Kam',
        'Jum',
        'Sab',
    ],
    dayNamesMin: [
        'Mig',
        'Sen',
        'Sel',
        'Rab',
        'Kam',
        'Jum',
        'Sab',
    ],
});

$('.datatable#destination').DataTable({
    processing: true,
    serverSide: true,
    ajax: "/admin/getDestination",
    columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex',
            orderable: false,
            searchable: false,
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'action',
            name: 'action',
            orderable: true,
            searchable: true
        },
    ]
});

$('.datatable#destinationPacket').DataTable({
    processing: true,
    serverSide: true,
    ajax: "/admin/"+window.location.href.split('/')[window.location.href.split('/').length-2]+"/getPacket",
    columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex',
            orderable: false,
            searchable: false,
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'days',
            name: 'days'
        },
        {
            data: 'people',
            name: 'people'
        },
        {
            data: 'price',
            name: 'price'
        },
        {
            data: 'action',
            name: 'action',
            orderable: true,
            searchable: true
        },
    ]

});

$('.datatable#bank').DataTable({
    processing: true,
    serverSide: true,
    ajax: "/admin/getBankAccount",
    columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex',
            orderable: false,
            searchable: false,
        },
        {
            data: 'photo_url',
            name: 'photo_url',
            render: function(data){
                return "<img src="+data+" class='img-fluid' style=''>";
            }
        },
        {
            data: 'bank_name',
            name: 'bank_name'
        },
        {
            data: 'account_number',
            name: 'account_number'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'action',
            name: 'action',
            orderable: true,
            searchable: true
        },
    ]
});

if($("#ckeditor").length){
    ClassicEditor
        .create( document.querySelector( '#ckeditor' ), {
            removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload', 'MediaEmbed'],
        } )
        .catch( error => {
            console.error( error );
        } );
}
window.ClassicEditor = ClassicEditor;
if($("#action-message").length){
    $("#action-message").fadeTo(2000, 500).slideUp(500, function(){
        $("#action-message").slideUp(500);
    });
}

