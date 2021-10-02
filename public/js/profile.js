$(document).ready(()=>{

  const fetchRegion=()=>{

    $(document).on('change','#region',function(e){
      e.preventDefault();

        var regionId=$(this).val();
        var url=route('admin.district');
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        $.ajax({
          url:url,
          type:'POST',
          data:{regionId:regionId},
          success:function(data,xhr){
             var html='';
                for(var i=0;i<data.length;i++){
                  html+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                }
                $("#district").html(html);
          }
        })
    })
  }
  fetchRegion();
})