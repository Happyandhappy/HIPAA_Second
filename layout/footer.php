<?php ?>
</div>

      <!-- end:: Body -->

      <!-- begin::Footer -->
      <footer class="m-grid__item m-footer ">
      </footer>
      <!-- end::Footer -->
    </div>

    <!-- end:: Page -->

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
      <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->

    <!--begin::Base Scripts -->
    <script src="assets/js/vendors.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="assets/js/datatables.bundle.js" type="text/javascript"></script>
    <script src="assets/js/paginations.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js" type="text/javascript"></script>

  </body>

  <!-- end::Body -->
</html>

<script type="text/javascript">
  function getArrayfromSerialize(str){
    var units = str.split("&");
    var results = {};
    for ( var i =  0 ; i < units.length; i++){
      key = units[i].split('=')[0];
      value = units[i].split('=')[1];
      results[key] = value;
    }
    return results;
  }


  jQuery(document).ready(function(){
    $('#spiner').addClass('hidden');
    $(".delete").on("click", function(e){
        e.preventDefault();
        if (confirm("Are you sure to delete?")){
            window.location.href = $(this).attr("href");
        }
    });

    $("form").submit(function(e){
        e.preventDefault();
        var data = $('form').serialize();
        var checkboxes = $(this).find(":checkbox");        
        for ( var i = 0 ; i < checkboxes.length ; i++){
          data += "&" + checkboxes[i].name + "=" + checkboxes[i].checked;          
        }
        $('form').find('button[type=submit]').addClass('m-loader m-loader--light m-loader--left');
        $('form').find('button[type=submit]').prop("disabled",true);
        $.ajax({
          url : "funController.php",
          method : "post",
          data : data,
          success : function(res){
            var data = JSON.parse(res);
            $('form').find('button[type=submit]').prop("disabled",false);
            $('form').find('button[type=submit]').removeClass('m-loader m-loader--light m-loader--left');
            if (data.status == "success"){
              old_dt = getArrayfromSerialize(this.data);
              dt = { "id" : data.data.id, "Name" : old_dt.Name, "User_assigned" : old_dt.User_assigned, action: "edit", type: "device-registry" };
              $.ajax({
                url : "funController.php",
                method : "post",
                data : dt,
                success : function(res){console.log(res)}
              });
            }
            alert(data.message);
          }
        })
    })  
  });
</script>