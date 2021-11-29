function createOrder(){
    $("#createOrder").modal('show');
    
}
function saveCreate() {
  $.ajax({
    type: 'post',
    url: '/web_3/handle/createOrder.php',
    data: $("#formCreateOrder").serialize(),
    success: function (response) {
        alert("Thêm mới thành công!");
        $("#createOrder").modal('hide');
    },
  });
}
function editOrder(id) {
  $.ajax({
    url: "/web_3/handle/getOrderById.php",
    data: { id: id },
    type: 'post',
    success: function (response) {
      let item = JSON.parse(response);
    //   $("#customerId").val(item.id);
    //   $("#customerFullname").val(item.fullname);
    //   $("#customerAddress").val(item.address);
    //   $("#customerPhone").val(item.phone);
      $("#editOrder").modal('show');
    },
  });
}

function updateOrder() {
  $.ajax({
    type: 'post',
    url: "/web_3/handle/updateOrder.php",
    data: $("#formUpdateOrder").serialize(),
    success: function (response) {
      alert("Cập nhật thành công!");
      $("#editOrder").modal('hide');
    },
  });
}

function confirmOrder(id){
    
}

function confirmDeleteOrder(id){
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
        url: "/web_3/handle/deleteOrder.php",
        data: { id: id },
        type: "POST",
        success: function (response) {
          alert("Xóa thành công");
        },
      });
    }
  });
}

