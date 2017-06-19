<style>

</style>

        
        <?= $this->Html->css('tagify.css') ?>
<?= $this->Html->script('tagify') ?>
 

        <style>
            p{ line-height:1.4; }
            code{ padding:2px 3px; background:lightyellow; }

            tags{
                min-width:400px;
                max-width:600px;
                margin: 1.5em 0;
            }

            /* for disabling the script */
            //label{ position:fixed; bottom:10px; right:10px; cursor:pointer; font:600 .8em Arial; }
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


    
        </form>
        <!-- Initialize Tagify for both Input and Textaera -->
        <script>
        
    
             var data = <?=  $vectortags ?>;
             var diss = new Array();
             for(var i = 0; i < data.length; i++) {
                 diss.push(data[i].nombre);
                 }
                // console.log(diss);

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