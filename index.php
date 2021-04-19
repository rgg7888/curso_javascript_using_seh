<?php

require_once __DIR__ . "/vendor/autoload.php";

doctype();
html("Les",[
    head(null,[
        meta("CUTF-8"),
        cls(meta("Nviewport cwidth=device-width,_initial-scale=1.0")),
        //replace the url , with your fonts
        lk("Hhttps://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap Rstylesheet"),
        //replace the path word with your favicon url
        cls(lk("Rshortcut_icon Hpath")),
        title(null,"Estructura basica"),
        style("Istyle")
    ]),
    body("OloadDoc()",[
        hdr(),
        main(null,[
            #prueba 1 mostrando la fecha al hacer click en un boton
                div("Ccard",div("Ccontainer",[
                    h2(null,"What Can JavaScript Do ?"),
                    cls(button("Tbutton Odocument.getElementById('demo').innerHTML_=_Date()","Click me to display Date and Time.")),
                    p("Idemo","JavaScript can change HTML content.")
                ])),
            #
            #prueba 2 encender un foco
                div("Ccard",div("Ccontainer",[
                    h2(null,"What Can JavaScript Do ?"),
                    p(null,"JavaScript can change HTML attribute values."),
                    p(null,"In this case JavaScript changes the value of the src (source) attribute of an image."),
                    button("Tbutton Odocument.getElementById('myImage').src='./assets/imgs/pic_bulbon.gif'","Turn on the light"),
                    img("ImyImage S./assets/imgs/pic_bulboff.gif swidth:100px"),
                    button("Tbutton Odocument.getElementById('myImage').src='./assets/imgs/pic_bulboff.gif'","Turn off the light")
                ]))
            #
        ]),
        footer(),
        script(null,changeContentOf("style","styles.php"))
    ])
]);
