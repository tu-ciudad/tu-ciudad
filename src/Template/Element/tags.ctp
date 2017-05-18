<link rel="stylesheet" href="https://cdn.rawgit.com/yairEO/ec9e154c4269b9a0f264fba7f64d7383/raw/9c3a2c44786cc671d48f939cf14a14235b2dfaa3/vsync_demos.css">

        <link rel="stylesheet" href="css/tagify.css">
        <script src="js/tagify.js"></script>

        <style>
            p{ line-height:1.4; }
            code{ padding:2px 3px; background:lightyellow; }

            tags{
                min-width:400px;
                max-width:600px;
                margin: 1.5em 0;
            }

            /* for disabling the script */
            label{ position:fixed; bottom:10px; right:10px; cursor:pointer; font:600 .8em Arial; }
            .disabled tags{
                max-width:none;
                min-width:0;
                border:0;
            }

            .disabled tags tag,
            .disabled tags div{ display:none }

            .disabled tags input,
            .disabled tags textarea{ display:initial; border:1px inset; }
        </style>
    </head>

    <body>
 

        <form>
    



         
          
              
                    <textarea name='tags2' id="tag" placeholder='Tags'></textarea>
            <button id="test" href="#">asd</button>

    
        </form>
        <!-- Initialize Tagify for both Input and Textaera -->
        <script>
        var status = "200";
        var tags = 0;
        var final = new Array();
        $('#test').click(function(e){
            e.preventDefault();
            

                val = $('#tag').val();
                //console.log(val);
                var data_array = val.split(", ");
                for (i = 0; i < data_array.length; i++){
                    for (x = 0; x < data.length; x++){
                        if(data_array[i] == data[x].nombre){
                            console.log(data[x].id +': '+ data_array[i] )
                            final.push(data[x].id);
                        }
                    }
                    
                }
                console.log(final);

        });
    
             var data = <?=  $vectortags ?>;
             var diss = new Array();
             for(var i = 0; i < data.length; i++) {
                 diss.push(data[i].nombre);
                 }
                 console.log(diss);

            var input2 = document.querySelector('textarea[name=tags2]'),
                // init Tagify script on the above inputs
             
                tagify2 = new Tagify(input2, {
                    enforeWhitelist : true,
                    whitelist       : diss,
                    callbacks       : {
                        add    : onAddTag,
                        remove : onRemoveTag
                    }
                });

            // add tag callback
            function onAddTag(e){
                //console.log(e, e.detail);
                


                //var jsonObj = JSON.stringify(data_array);
                //var tags = jsonObj;
          //console.log(array);
          //console.log(data_array);
          //console.log('array: '+jsonObj);
            }

            // remove tag callback
            function onRemoveTag(e){
               // console.log(e, e.detail);
            }

            function onDuplicateAdded(e){
               // console.log(e, e.detail);
            }




            ////////////////////////////////////////////

        </script>