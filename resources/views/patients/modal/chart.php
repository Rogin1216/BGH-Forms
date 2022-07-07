<script type='text/javascript'>
    $(function() {
  var spchart = <?php echo($encodeSpChart); ?>;
  var spDate = <?php echo($encodeDate); ?>;
  console.log(spDate);
                    var parseData = [];
                    spchart.forEach((element) => {
                        parseData.push({
                            name: element.name,
                            data: element.data
                        });
                    }); 
                    var chartDate = [];
                    spDate.forEach((element)=>{
                        chartDate.push({
                            categories: element.bioMarkerdate})
                    });
                    console.log(chartDate);
                    // console.log(parseData);


                    Highcharts.chart('container', {
                title: {
                text: 'Serum Biomarker Data'
                },

                // subtitle: {
                // text: 'Source: thesolarfoundation.com'
                // },

                yAxis: {
                title: {
                    text: 'Level'
                }
                },

                xAxis: {
                    categories: spDate
                // accessibility: {
                //     rangeDescription: 'Range: 2010 to 2017'
                // }
                },

                legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
                },

                // plotOptions: {
                // series: {
                //     label: {
                //     connectorAllowed: false
                //     },
                //     pointStart: 2022
                // }
                // },
                
                series: 
                    parseData,
                responsive: {
                rules: [{
                    condition: {
                    maxWidth: 500
                    },
                    chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                    }
                }]
                }

                });
            // });

    });
                  
                </script>