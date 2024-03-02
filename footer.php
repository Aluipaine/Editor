<!-- MAIN FOOTER FILE. CONFIGURING JS SCRIPTS  AND PRELOADER -->


<!-- <script  src="js/script.js"></script>
   <script>
   function updatew() {
     let STEP = 50;
     var h = (parseFloat(document.querySelector("#drawarea_h").value) / 10);
     var w = (parseFloat(document.querySelector("#drawarea_w").value) / 10);
   
   
       createCanvas(w, h);
       background(255);
       drawGrid();
       noLoop();
   }
   </script> -->
<!--   Marko settings -->  
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
<script src='https://unpkg.com/vue-color/dist/vue-color.min.js'></script>
<script>
   var Chrome = VueColor.Chrome;
     Vue.component('colorpicker', {
       components: {
         'chrome-picker': Chrome,
       },
       template: `
     <div class="input-group color-picker" ref="colorpicker">
       <input type="text" class="form-control" v-model="colorValue" @focus="showPicker()" @input="updateFromInput" />
       <span class="input-group-addon color-picker-container">
         <span class="current-color" :style="'background-color: ' + colorValue" @click="togglePicker()"></span>
         <chrome-picker :value="colors" @input="updateFromPicker" v-if="displayPicker" />
       </span>
     </div>`,
       props: ['color'],
       data() {
         return {
           colors: {
             hex: '#000000',
           },
           colorValue: '',
           displayPicker: true,
         }
       },
       mounted() {
         this.setColor(this.color || '#000000');
       },
       methods: {
         setColor(color) {
           this.updateColors(color);
           this.colorValue = color;
         },
         updateColors(color) {
           if(color.slice(0, 1) == '#') {
             this.colors = {
               hex: color
             };
           }
           else if(color.slice(0, 4) == 'rgba') {
             var rgba = color.replace(/^rgba?\(|\s+|\)$/g,'').split(','),
               hex = '#' + ((1 << 24) + (parseInt(rgba[0]) << 16) + (parseInt(rgba[1]) << 8) + parseInt(rgba[2])).toString(16).slice(1);
             this.colors = {
               hex: hex,
               a: rgba[3],
             }
           }
         },
         showPicker() {
           document.addEventListener('click', this.documentClick);
           this.displayPicker = true;
         },
         hidePicker() {
           document.removeEventListener('click', this.documentClick);
           this.displayPicker = false;
         },
         togglePicker() {
           this.displayPicker ? this.hidePicker() : this.showPicker();
         },
         updateFromInput() {
           this.updateColors(this.colorValue);
         },
         updateFromPicker(color) {
           this.colors = color;
           if(color.rgba.a == 1) {
             this.colorValue = color.hex;
           }
           else {
             this.colorValue = 'rgba(' + color.rgba.r + ', ' + color.rgba.g + ', ' + color.rgba.b + ', ' + color.rgba.a + ')';
           }
         },
         documentClick(e) {
           var el = this.$refs.colorpicker,
             target = e.target;
           if(el !== target && !el.contains(target)) {
             this.hidePicker()
           }
         }
       },
       watch: {
         colorValue(val) {
           if(val) {
             this.updateColors(val);
             this.$emit('input', val);
             //document.body.style.background = val;
           }
         }
       },
     });
     new Vue({
       el: '#app',
       data: {
         defaultColor: '#FF0000'
       }
     });
</script>
<script src='js/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js'></script>
<!-- Marko new row btn function -->
<!-- <script src="js/jstemplates/mrarko.js"></script> -->
<script src="js/jstemplates/creation.js"></script>

<script>

  $(document).ready(function(){
    setTimeout(() => {
      $(".preloader").removeClass( "active" );
    }, 2000);
  });

</script>