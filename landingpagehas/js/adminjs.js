jQuery(document).ready(function(){
    jQuery(".nav-table").on("click",".nav-number",function () {

        var thisNav = jQuery(this);
        var number = thisNav.data("current");
        var data = {
            'action': 'ajaxpagenavi',
            'current' : number
        };

        jQuery.ajax({
            url: admin_ajax.url,
            type:'post',
            data:data,
            success: function(response){

                var $data = jQuery.parseJSON(response);
                var type = parseInt($data.type);
                var tableHtml = '';
                if($data.table){
                    var  dataTable = $data.table;
                    for (var i = 0;i<dataTable.length;i++){
                        if(dataTable[i].city != 0){
                            var cityThis = CITY[parseInt(dataTable[i].city)-1].name;
                        }else {
                            var cityThis = '';
                        }
                        tableHtml += '<tr id="item-tr-'+dataTable[i].id+'" class="item-tr">';
                        tableHtml += '<td>'+dataTable[i].id+'</td>';
                        tableHtml += '<td>'+dataTable[i].fullname+'</td>';
                        tableHtml += '<td>'+dataTable[i].phone+'</td>';
                        tableHtml += '<td>'+dataTable[i].email+'</td>';
                        tableHtml += '<td>'+dataTable[i].school+'</td>';
                        tableHtml += '<td>'+hmLandingClass(dataTable[i].class)+'</td>';
                        tableHtml += '<td>'+cityThis+'</td>';
                        tableHtml += '<td>'+timeConverter(dataTable[i].created)+'</td>';
                        tableHtml += '</tr>';
                    }
                }
                jQuery(".wapper-page-form tbody").html(tableHtml);

                var navHtml = '';

                if($data.totalpage > 0){
                    for (var i = 1; i<=$data.totalpage;i++){
                        navHtml += '<a class="nav-number" data-current="'+i+'" href="javascript:void(0)">'+i+'</a>';
                    }
                }
                jQuery("#nav-table").html(navHtml);

            }
        });
    });

});

function timeConverter(UNIX_timestamp){
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var time = date + '/' + month + '/' + year;
    return time;
}

function hmLandingClass($id) {
    var  $classArray = [];
    $classArray[-1] = "Mần non";
    $classArray[1] = "Lớp 1";
    $classArray[2] = "Lớp 2";
    $classArray[3] = "Lớp 3";
    $classArray[4] = "Lớp 4";
    $classArray[5] = "Lớp 5";
    $classArray[6] = "Lớp 6";
    $classArray[7] = "Lớp 7";
    $classArray[8] = "Lớp 8";
    $classArray[9] = "Lớp 9";
    $classArray[10] = "Lớp 10";
    $classArray[11] = "Lớp 11";
    $classArray[12] = "Lớp 12";
    if($classArray[$id]){
        return $classArray[$id];
    }else {
        return "";
    }
}
