function createProduct(){
    $("#createProduct").modal('show');
    
}
function saveCreate() {
  $.ajax({
    type: 'post',
    url: '/web_3/handle/createProduct.php',
    data: $("#formCreateProduct").serialize(),
    success: function (response) {
        alert("Thêm mới thành công!");
        $("#createProduct").modal('hide');
    },
  });
}
function editProduct(id) {
  $.ajax({
    url: "/web_3/handle/getProductById.php",
    data: { id: id },
    type: 'post',
    success: function (response) {
      let item = JSON.parse(response);
      $("#productId").val(item.id);
      $("#productName").val(item.name);
      $("#productPrice").val(item.price);
      $("#productImportPrice").val(item.importPrice);
      $("#productQuantity").val(item.quantity);
      $("#productEdit").modal('show');
    },
  });
}

function updateProduct() {
  $.ajax({
    type: 'post',
    url: "/web_3/handle/updateProduct.php",
    data: $("#formUpdateProduct").serialize(),
    success: function (response) {
      alert("Cập nhật thành công!");
      $("#productEdit").modal('hide');
    },
  });
}


function confirmDeleteProduct(id){
  Swal.fire({
    title: "Bạn có chắc chắn muốn xóa?",
    text: "Bạn sẽ không thể lấy lại được dữ liệu này!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Xác nhận!",
    cancelButtonText: "Hủy",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: "/web_3/handle/deleteProduct.php",
        data: { id: id },
        type: "POST",
        success: function (response) {
          alert("Xóa thành công!");
        },
      });
    }
  });
}


