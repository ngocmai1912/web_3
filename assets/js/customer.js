function createCustomer(){
    $("#createCustomer").modal('show');
    
}
function saveCreate() {
  $.ajax({
    type: 'post',
    url: '/web_3/handle/createCustomer.php',
    data: $("#formCreateCustomer").serialize(),
    success: function (response) {
        alert("Thêm mới thành công!");
        $("#createCustomer").modal('hide');
    },
  });
}
function editCustomer(id) {
  $.ajax({
    url: "/web_3/handle/getCustomerById.php",
    data: { id: id },
    type: 'post',
    success: function (response) {
      let item = JSON.parse(response);
      $("#customerId").val(item.id);
      $("#customerFullname").val(item.fullname);
      $("#customerAddress").val(item.address);
      $("#customerPhone").val(item.phone);
      $("#customerEdit").modal('show');
    },
  });
}

function updateCustomer() {
  $.ajax({
    type: 'post',
    url: "/web_3/handle/updateCustomer.php",
    data: $("#formUpdateCustomer").serialize(),
    success: function (response) {
      alert("Cập nhật thành công!");
      $("#customerEdit").modal('hide');
    },
  });
}


function confirmDeleteCustomer(id){
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
        url: "/web_3/handle/deleteCustomer.php",
        data: { id: id },
        type: "POST",
        success: function (response) {
          alert("Xóa thành công");
        },
      });
    }
  });
}

function deleteCustomer(){
  $.ajax({
    type: 'post',
    url: "/web_3/handle/deleteCustomer.php",
    data: $("#formDeleteCustomer").serialize(),
    success: function (response) {
      alert(response);
      $("#customerDelete").modal('hide');
    },
  });
}

