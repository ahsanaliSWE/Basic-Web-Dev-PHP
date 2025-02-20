<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30 Css properties</title>
    <style>
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 5px;
            margin-bottom: 10px;
        }
        
        .box {
            width: 200px;
            height: 300px;
            outline: 2px solid red;
            outline-offset: 10px;
        }
        .container {
            display: flex; 
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            align-content: stretch; 
            flex-wrap: wrap;
            background-color: lightgray;
            padding: 20px;
        }

        .item {
            flex-grow: 1;
            flex-shrink: 1; 
            flex-basis: 100px; 
            background-color: steelblue;
            color: white;
            text-align: center;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
        }

        .grid-container {
             display: grid;
             grid-template-columns: auto auto auto auto;
             grid-template-rows: 100px 300px;  
             /* grid-gap: 10px; */
             row-gap: 10px;
             column-gap: 10px;
             background-color:rgb(76, 100, 120);
             padding: 10px;
        }
           
        .grid-container > div {
             background-color: rgba(255, 255, 255, 0.8);
             text-align: center;
             padding: 20px 0;
             font-size: 30px;
        }

        .hyphan { 
          width: 100px;
          border: 1px solid black;
        }
         
        .hyphan .a {
          hyphens: none;
          hyphenate-character: auto;
        }
        
        .hyphan .b {
          hyphens: manual;
          hyphenate-character: "=";
        }
        
        .hyphan .c {
          hyphens: auto;
          hyphenate-character: "/";
        }

        .letter::first-letter{
          initial-letter: 4 2
        }

        .ex1 {
          pointer-events: none;
        }
        
        .ex2 {
          pointer-events: auto;
        }

        #bg-clip {
          background-color: lightblue;
          padding: 20px;
          border: 1px solid black;
          background-clip: content-box;
        }

        #opacity {
          background-color: lightblue;
          padding: 20px;
          border: 1px solid black;
          opacity: 0.3;
        }

        .write-mode {
          writing-mode: vertical-rl;
          text-orientation: upright;
          background-color: lightblue;
          padding: 20px;
          border: 1px solid black;
        }

        .trans-box{
            height: 90px;
            width: 40px;
            background-color: red;
            translate: 100px 20px;

        }

        #hd {
            visibility: hidden;
        }

        .z {
            zoom: 150%;
        }
        
        #restrict {
            user-select: none;
        }

        .uni-code {
            unicode-bidi: bidi-override;
            direction: rtl;
        }

        #q {
            quotes: "«" "»";
        }
        
        html {
        scroll-behavior: smooth;
        }

        div.scroller {
         width: 300px;
        height: 100px;
        overflow-y: scroll;
        scrollbar-color: pink lightblue;
        }

    </style>
</head>
<body>
     <header>
        <h1>30 Css properties</h1>
        <hr/>
    </header>
    <div class="box">
        <h2>1. outline</h2>
        <p>outline: 2px solid red;</p>
        <p>Defines a line around the element</p>
        <h2>2. outline-offset</h2>
        <p>outline-offest: 10px</p>
        <p>Defines space between the outline and border.</p>
    </div>

    <div class="container">
        <div class="item">Item 1</div>
        <div class="item">Item 2</div>
        <div class="item">Item 3</div>
        <div class="item">Item 4</div>
    </div>

    <div>
        <h2>properties used in above box</h2>
        <h2>3. flex-direction</h2>
        <p>flex-direction: row;</p>
        <p>Defines the direction of flex items.</p>
        <h2>4. justify-content</h2>
        <p>justify-content: space-between;</p>
        <p>Aligns items along the main axis</p>
        <h2>5. align-content</h2>
        <p>align-content: stretch;</p>
        <p>Defines space between multiple rows</p>
        <h2>6. align-items</h2>
        <p>align-items: center;</p>
        <p>Aligns items along the cross axis</p>
        <h2>7. flex-grow</h2>
        <p>flex-grow: 1;</p>
        <p>Defines the growth rate of a flex item</p>
        <h2>8. flex-shrink:</h2>
        <p>flex-shrink: 1;</p>
        <p>Defines how flex items shrink</p>
        <h2>9. flex-basis</h2>
        <p>flex-basis: 100px;</p>
        <p>Defines the initial size of a flex item</p>
    </div>

    <h1 align="center">Grid Layout</h1>
    <div class="grid-container">
        <div class="grid-item item1">Item 1</div>
        <div class="grid-item item2">Item 2</div>
        <div class="grid-item item3">Item 3</div>
        <div class="grid-item item4">Item 4</div>
    </div>

    <div>
        <h1>properties used</h1>
        <h2>10. grid-template-columns</h2>
        <p>grid-template-columns: auto auto auto auto;</p>
        <p>Define the number of columns in the grid layout.</p>
        <h2>11. grid-template-rows</h2>
        <p>grid-template-rows: 100px 300px; </p>
        <p>define the size of the rows in a grid layout</p>
        <h2>12. grid-gap</h2>
        <p>grid-gap: 10px;</p>
        <p>used to specify the size of the gap between the rows and the columns.</p>
        <h2>13. row-gap</h2>
        <p>row-gap: 10px;</p>
        <p>Specifies the gap between the rows in a flexbox or grid layout.</p>
        <h2>14. column-gap</h2>
        <p>column-gap: 10px;</p>
        <p>Specifies the gap between the columns in a flexbox or grid layout.</p>
    </div>

    <h1 align="center">Hyphans properties</h1>
    <div class="hyphan">
    <h2>hyphens: none</h2>
    <div class="a">A veryvery­veryvery long word.</div>
    
    <h2>hyphens: manual</h2>
    <div class="b">A veryvery­veryvery long word.</div>
    
    <h2>hyphens: auto</h2>
    <div class="c">A veryvery­veryvery long word.</div>

    </div>

    <div>
        <h1>properties used</h1>
        <h2>15. hyphens</h2>
        <p>The hyphens property defines whether hyphenation is allowed to create more soft wrap opportunities within a line of text.</p>
        <h2>16. hyphenate-character</h2>
        <p>The hyphenate-character property defines the character used at the end of line, before a hyphenation break.</p>
    </div>

    <h1 align="center">Initial letter properties</h1>
    <div class="letter">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas commodo dui vitae libero consequat iaculis. Pellentesque lectus ex, malesuada id fermentum in, lobortis a lorem. Sed a dui quis ipsum pretium euismod non vitae felis. Nunc commodo ante nisl, et egestas mauris consequat et.</p>
    </div>

    <div>
        <h1>property used</h1>
        <h2>17. initial-letters</h2>
        <p>The initial-letter property specifies the size of the initial-letter and optionally the number of lines the initial letter should sink.</p>
    </div>

    
    <h1 align="center">The pointer-events Property</h1>

    <h2>pointer-events: none:</h2>
    <div class="ex1">Go to <a href="#">HTML</a></div>

    <h2>pointer-events: auto (default):</h2>
    <div class="ex2">Go to <a href="#">CSS</a></div>

    <div>
        <h1>property used</h1>
        <h2>18. pointer-events</h2>
        <p>The pointer-events property specifies whether or not an element is to react to pointer events.</p>
    </div>

    <div id="bg-clip">
    <p>The background extends to the edge of the content box.</p>
    </div>

    <div>
        <h1>property used</h1>
        <h2>19. background-clip</h2>
        <p>The background-clip property specifies the painting area of the background.</p>
    </div>

    <div id="opacity">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit...</div>

    <div>
        <h1>property used</h1>
        <h2>20. opacity</h2>
        <p>The opacity property specifies the opacity/transparency of an element.</p>
    </div>


    <p class="write-mode">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid voluptates vero porro cumque inventore nemo. 
        Aliquid dignissimos dolorem molestias facilis impedit repudiandae non, laboriosam quis dicta nulla quibusdam quos?</p>

        <h1>property used</h1>
        <h2>21. writing-mode</h2>
        <p>The writing-mode property specifies whether lines of text are laid out horizontally or vertically and the direction in which blocks progress.</p>
        <h2>22. text-orientation</h2>
        <p>The text-orientation property specifies the orientation of the text within a line.</p>
    
    <div class="trans-box"></div>

    <div>
        <h1>property used</h1>
        <h2>23. translate</h2>
        <p>The translate property specifies the translation of an element in the x and y-axis.</p>
    </div>


    <h1>heading 1</h1>
    <h1 id="hd">heading 2</h1>
    <h1>heading 3</h1>

    <div>
        <h1>property used</h1>
        <h2>24. visibility</h2>
        <p>The visibility property specifies whether or not an element is visible.</p>
    </div>

    <h2>zoom: 150%:</h2>
     <p class="z">zoom in text Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        A aliquid eveniet commodi, perferendis veritatis ipsam cumque facere error eos provident, 
        tempore omnis nihil repellat, quas dolor ab. Molestiae, quaerat rerum!.</p>

        <h1>property used</h1>
        <h2>25. zoom</h2>
        <p>The zoom property allows you to specify a magnification scale for an element.</p>
    
    <h2 id="restrict">The text of this div element cannot be selected. If you double-click me, my text will not be highlighted.</h2>

    <div>
        <h1>property used</h1>
        <h2>26. user-select</h2>
        <p>The user-select property specifies whether the text of an element can be selected.</p>   
    </div>


    <h1>The unicode-bidi Property</h1>

    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit incidunt eveniet unde neque consectetur perspiciatis corporis, 
        iure tempora ea molestias eligendi optio sapiente architecto ex. Odit itaque ex vitae fuga..</div>
    <div class="uni-code">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptas accusamus iste a voluptates molestias illo quod delectus unde eaque beatae quos, 
        aliquam error dolor quibusdam cumque officia qui eveniet!.</div>

    <div>
        <h1>property used</h1>
        <h2>27. unicode-bidi</h2>
        <p>The unicode-bidi property is used together with the direction property to set or return whether the text should be overridden to support multiple languages in the same document.</p>
    </div>

    <h1>The quotes Property</h1>

    <h3><q id="q">This is a <q>quote</q> inside a quote.</q></h3>

    <div>
        <h1>property used</h1>
        <h2>28. quotes</h2>
        <p>The quotes property specifies the type of quotation marks for embedded quotations.</p>
    </div>

    <div>
        <h2>Scroll</h2>
        <a href="#hd">Click Me to Smooth Scroll to up</a>
    </div>

    <div>
        <h1>property used</h1>
        <h2>29. scroll-behavior</h2>
        <p>The scroll-behavior property specifies whether to smoothly animate the scroll position, instead of a straight jump.</p>
    </div>

    <div class="scroller">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...
    </div>

    <div>
        <h1>property used</h1>
        <h2>30. scrollbar-color</h2>
        <p>The scrollbar-color property specifies the color of the scrollbar.</p>
    </div>


    

    
    
</body>
</html>