// // $('#cari-keyword').on('keyup',function () {
// //   let query = $(this).val();
// //   console.log(query);

// //   $.ajax({
// //     url:"http://127.0.0.1:8000/manajemen/kegiatan/cari",
// //     type :"GET",
// //     data:{'cari':query},
// //     dataType:'json',
// //     success: function (data) {

// //       console.log('success');
// //       $('#tabel-dinamis').html('');
// //       $('.pag').html('');

// //       let a = data.data;
// //       $.each(a,function (i,data) {
// //         $('#tabel-dinamis').append(`
// //           <tr>
// //             <td>Hallo</td>
// //           </tr>
// //         `)
// //       });
// //     }

// //   });
// //   // end of ajax 


// $('#cari-keyword').on('keyup',function () {
//   let query = $(this).val();

//   fetch_acara_query(query);

//   function fetch_acara_query(query = '') {
//     $.ajax({
//       url:"http://127.0.0.1:8000/manajemen/kegiatan/cari",
//       type :"GET",
//       data:{'cari':query},
//       dataType:'json',
//       success: function (data) {
//         let item = data.table_data
//         console.log(item);
//         console.log(data.total_data);
//         $('#total-record').html(data.total_data);
//         $('#tabel-dinamis').html('');
//         $('#mdl').html('');
//         $('.pag').html('');
        

//         $.each(item,function (i,data) {
//           $('tbody').append(`
//             <tr>
//             <td>`+data.judul+`</td>
//             <td>`+data.created_at+`</td>
//             <td>`+data.status+`</td>
//             <td>
//             <a href="`window.location.href = "{{ route('show-all-prescription')}}";
//             +data.slug+`" target="_blank" class="btn btn-sm btn-outline-danger"><i class="fas fa-eye"></i></a>
//             <button data-toggle="modal" data-target="#edit-`+data.id+`" class="btn btn-sm btn-outline-danger"><i class="fa fa-edit"></i></button>
//             <a href="manajemen/kegiatan/delete/`+data.id+`" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
//             </td>
//             </tr>
//             `);

//           var url = '{{route("updateAcara",["id" => '+data.id+'])}}';
//           url = url.replace(':id', stock.id);
//           $('.mdl').append(`
//             <div class="modal fade" id="edit-`+data.id+`" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
//             <div class="modal-dialog modal-lg " role="document">
//               <div class="modal-content">
//                 <div class="modal-header">
//                   <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
//                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
//                     <span aria-hidden="true">&times;</span>
//                   </button>
//                 </div>
//                 <form class="m-2" method="post" action="manajemen/kegiatan/update/`+data.id+`" enctype="multipart/form-data">
//                   <div class="modal-body">
//                     @csrf
//                     <div class="card-body">
//                       <div class="form-group row mb-4">
//                         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Kegiatan</label>
//                         <div class="col-sm-12 col-md-7">
//                           <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul Acara/Kegiatan" autocomplete="off" value="`+data.judul+`" required>
//                           <p></p>
//                         </div>
//                       </div>
      
//                       <div class="form-group row mb-4">
//                         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Berita</label>
//                         <div class="col-sm-12 col-md-7">
//                         <textarea class="form-control" name="deskripsi" id="deskripsi-edit" placeholder="Masukan Deskripsi Acara/Kegiatan" style="height: 300px;" required>`+data.deskripsi+`</textarea>
//                         </div>
//                       </div>
      
//                       <div class="form-group row">
//                         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="image">Pilih Image</label>
//                         <div class="col-sm-12 col-md-7">
//                           <input type="file" class="form-control" name="imageUpdate">
//                         </div>
//                         <h6 class="p-2 mx-auto">*Max ukuran image/foto : 5 MB</h6>
//                       </div>
                      
                      
//                       <div class="form-group row mb-4">
//                         <div class="mx-auto button-submit">
//                           <button type="submit" class="btn btn-primary">Update!</button>
//                         </div>
//                       </div>
//                     </div>
//                   </div>
//                   <div class="modal-footer">
//                   </div>
//                 </form> 
//               </div>
//             </div>
//           </div>
//           `);
//         });

      
//       }
//     });
//   }
// });

