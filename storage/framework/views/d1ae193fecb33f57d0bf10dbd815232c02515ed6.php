<!-- Styles -->
<style>
    #chartdiv{
        width: 100%;
        height: 500px;
    }

    #chartdiv2 {
  width: 100%;
  height: 500px;
}
</style>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card mb-5">
            <div class="card-header">
                Chart
            </div>
            <div class="card-body">
                <div id="chartdiv"></div>
            </div>
        </div>
        <div class="card mb-5">
            <div class="card-header">
                Chart 2
            </div>
            <div class="card-body">
                <div id="chartdiv2"></div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Chart
                    </div>
                    <div class="card-body">
                        12345
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Chart
                    </div>
                    <div class="card-body">
                        12345
                    </div>
                </div>
            </div>
        </div>
        <a href="/kereta/create" class="btn">Create</a>
        <div id="tableExample" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
                <table class="table table-bordered table-striped fs--1 mb-0">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th>No</th>
                            <th>Nama Kereta</th>
                            <th>Jenis Kereta</th>
                            <th>Warna Kereta</th>
                            <th>Harga Kereta</th>
                            <th>Gambar Kereta</th>
                            <th>Edit</th>
                            <th>Edit Harga</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $__currentLoopData = $kereta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($k->id); ?></td>
                                <td><?php echo e($k->nama_kereta); ?></td>
                                <td><?php echo e($k->jenis_kereta); ?></td>
                                <td><?php echo e($k->warna_kereta); ?></td>
                                <td>RM <?php echo e($k->harga_kereta); ?></td>
                                
                                <td><img src="/storage/<?php echo e($k->file_kereta); ?>" alt="" style="width: 50px"></td>
                                <td><a href="/kereta/<?php echo e($k->id); ?>/edit" class="btn">Edit</a></td>
                                <td><a href="/kereta/<?php echo e($k->id); ?>/edit-harga" class="btn">Edit Harga</a>
                                </td>
                                <td>
                                    <form action="/kereta/<?php echo e($k->id); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Chart code -->
    <script>
        am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
                am5themes_Animated.new(root)
            ]);

            // Create chart
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
            var chart = root.container.children.push(
                am5percent.PieChart.new(root, {
                    endAngle: 270
                })
            );

            // Create series
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
            var series = chart.series.push(
                am5percent.PieSeries.new(root, {
                    valueField: "value",
                    categoryField: "category",
                    endAngle: 270
                })
            );

            series.states.create("hidden", {
                endAngle: -90
            });

            // Set data
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
            series.data.setAll([{
                category: "Proton",
                value: 501.9
            }, {
                category: "Toyota",
                value: 301.9
            }, {
                category: "Mazda",
                value: 201.1
            }, {
                category: "Honda",
                value: 165.8
            }, {
                category: "Mercedes",
                value: 139.9
            }, {
                category: "Perodua",
                value: 128.3
            }, {
                category: "krik krik",
                value: 99
            }]);

            series.appear(1000, 100);

        }); // end am5.ready()
    </script>
            <!-- Chart code -->
            <!--chart2-->
        <script>
            am5.ready(function() {
            
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv2");
            
            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([
            am5themes_Animated.new(root)
            ]);
            
            // Create chart
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
            var chart = root.container.children.push(
            am5percent.PieChart.new(root, {
                startAngle: 160, endAngle: 380
            })
            );
            
            // Create series
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
            
            var series0 = chart.series.push(
            am5percent.PieSeries.new(root, {
                valueField: "litres",
                categoryField: "country",
                startAngle: 160,
                endAngle: 380,
                radius: am5.percent(70),
                innerRadius: am5.percent(65)
            })
            );
            
            var colorSet = am5.ColorSet.new(root, {
            colors: [series0.get("colors").getIndex(0)],
            passOptions: {
                lightness: -0.05,
                hue: 0
            }
            });
            
            series0.set("colors", colorSet);
            
            series0.ticks.template.set("forceHidden", true);
            series0.labels.template.set("forceHidden", true);
            
            var series1 = chart.series.push(
            am5percent.PieSeries.new(root, {
                startAngle: 160,
                endAngle: 380,
                valueField: "bottles",
                innerRadius: am5.percent(80),
                categoryField: "country"
            })
            );
            
            series1.ticks.template.set("forceHidden", true);
            series1.labels.template.set("forceHidden", true);
            
            var label = chart.seriesContainer.children.push(
            am5.Label.new(root, {
                textAlign: "center",
                centerY: am5.p100,
                centerX: am5.p50,
                text: "[fontSize:18px]total[/]:\n[bold fontSize:30px]1647.9[/]"
            })
            );
            
            var data = [
            {
                country: "Chart 2 Testing 1",
                litres: 501.9,
                bottles: 1500
            },
            {
                country: "Chart 2 Testing 2",
                litres: 301.9,
                bottles: 990
            },
            {
                country: "Chart 2 Testing 3",
                litres: 201.1,
                bottles: 785
            },
            {
                country: "Germany",
                litres: 165.8,
                bottles: 255
            },
            {
                country: "Australia",
                litres: 139.9,
                bottles: 452
            },
            {
                country: "Austria",
                litres: 128.3,
                bottles: 332
            },
            {
                country: "UK",
                litres: 99,
                bottles: 150
            },
            {
                country: "Belgium",
                litres: 60,
                bottles: 178
            },
            {
                country: "The Netherlands",
                litres: 50,
                bottles: 50
            }
            ];
            
            // Set data
            // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
            series0.data.setAll(data);
            series1.data.setAll(data);
            
            }); // end am5.ready()
            </script>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maisarahmusa/Desktop/work/bootcamp/example/resources/views/kereta/index.blade.php ENDPATH**/ ?>