<div class="row2">
    <div class="row2 font_title">
        <h1>Biểu đồ</h1>
    </div>
    <div class="row2 form_content">
        <a style="margin-top: 20px;" href="index.php?act=thongke" class="btn btn-success">XEM THỐNG KÊ</a>
        <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
        </div>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                        $tongdm = count($listthongke);
                        $i = 1;
                        foreach($listthongke as $thongke) {
                            extract($thongke);
                            if($i == $tongdm) {
                                $dauphay = "";
                            } else {
                                $dauphay = ",";
                            }
                            ?>
                                ['<?= $thongke['tendm'] ?>', <?= $thongke['countSp'] ?>]<?= $dauphay ?>
                            <?php
                            $i+=1;
                        }
                    ?>
                    
                ]);

                // Set Options
                const options = {
                    title: 'Biểu đồ thống kê',
                    is3D: true
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>
    
    </div>
</div>