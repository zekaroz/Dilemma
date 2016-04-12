<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>vue.JS Test</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

      <style media="screen">

          .selected{
              background-color: red;
          }

          .button{
            width: 40px;
            height: 30px;
          }
      </style>

    <div id="app">
        <h1> @{{ header }}</h1>

        <div v-for="serie in data"
                style="border: 1px dotted orange;
                        padding:30px;width: 100px;
                        display: inline-block;">

            <div v-for="point in serie"
                  style="width:50px;
                         border:1px solid black;
                         margin: 3px;
                         text-align: center;"
                :class="{ 'selected' : point.x == currentPosition.x && point.y == currentPosition.y}"
            >

            @{{  point.x + ' - '  + point.y }}

            </div>
        </div>

        <div class="container" style="margin-top: 40px;">

          <div class="">
            current position
          </div>
          <div class="">
            X: @{{ currentPosition.x }}
          </div>
          <div class="">
            Y: @{{ currentPosition.y }}
          </div>
          <div class="row">
            <div class="controls">

              <div style="margin-left: 44px">
                    <button type="button" class="button" @click="down()" name="up"> ^ </button>
              </div>
              <button type="button" class="button" @click="left()" name="left">  < </button>
              <button type="button" class="button" @click="up()" name="down"> v </button>
              <button type="button" class="button" @click="right()"name="right"> > </button>

            </div>

          </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.min.js" charset="utf-8"></script>

    <script type="text/javascript">

      new Vue({
        el: '#app',
        data: {
          header: 'Hello Vue.js!',
          currentPosition: { x:0, y:0 },
          data:[
                [
                 {x: 0, y: 0},
                 {x: 1, y: 0},
                 {x: 2, y: 0},
                 {x: 3, y: 0},
                 {x: 4, y: 0}
               ],
               [
                {x: 0, y: 1},
                {x: 1, y: 1},
                {x: 2, y: 1},
                {x: 3, y: 1},
                {x: 4, y: 1}
              ],
              [
               {x: 0, y: 2},
               {x: 1, y: 2},
               {x: 2, y: 2},
               {x: 3, y: 2},
               {x: 4, y: 2}
             ],
             [
              {x: 0, y: 3},
              {x: 1, y: 3},
              {x: 2, y: 3},
              {x: 3, y: 3},
              {x: 4, y: 3}
            ],
            [
             {x: 0, y: 4},
             {x: 1, y: 4},
             {x: 2, y: 4},
             {x: 3, y: 4},
             {x: 4, y: 4}
           ]
          ]
        },
         methods: {
           right: function (){
                this.currentPosition.y++;

                if (this.currentPosition.y > 4) {
                  this.currentPosition.y =4;
                }

           },
          up: function(){
                this.currentPosition.x++;
                if (this.currentPosition.x > 4) {
                  this.currentPosition.x =4;
                }
           },
           down: function(){
                this.currentPosition.x--;
                if (this.currentPosition.x < 0) {
                  this.currentPosition.x =0;
                }
           },
           left: function(){
                this.currentPosition.y--;
                if (this.currentPosition.y < 0) {
                  this.currentPosition.y =0;
                }
           }

         },
         computed: {

         }
      })

    </script>

  </body>
</html>
