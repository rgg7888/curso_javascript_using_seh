<?php

require_once __DIR__ . "/vendor/autoload.php";

/**
 * JavaScript_Function_Maker , Object
 */
$jfm = jfm("showResult");
/** */

doctype();
html("Les",[
    head(null,[
        meta("CUTF-8"),
        cls(meta("Nviewport cwidth=device-width,_initial-scale=1.0")),
        //replace the url , with your fonts
        lk("Hhttps://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap Rstylesheet"),
        //replace the path word with your favicon url
        cls(lk("Rshortcut_icon Hpath")),
        title(null,"N Test"),
        style("Istyle"),
        script(null,[
            $jfm->make($jfm->si("str.length==0",[
                'document.getElementById("livesearch").innerHTML="";',
                'document.getElementById("livesearch").style.border="0px";',
                'return;',
                $jfm->httpObject("xhttp"),
                $jfm->ors("xhttp",$jfm->si("this.readyState==4 && this.status==200",[
                    'document.getElementById("livesearch").innerHTML=this.responseText;',
                    'document.getElementById("livesearch").style.border="1px solid #A5ACB2";'
                ])),
                $jfm->abrir("xhttp","GET","livesearch.php?q=","true","+str"),
                $jfm->enviar("xhttp")
            ]),"str")
        ])
    ]),
    body("OloadDoc()",[
        hdr(),
        main(null,[
            #prueba 1 mostrando la fecha al hacer click en un boton
                cls(div("Ccard*test01",div("Ccontainer",[
                    h2(null,"What Can JavaScript Do ?"),
                    cls(button("Tbutton Odocument.getElementById('demo').innerHTML_=_Date()","Click me to display Date and Time.")),
                    p("Idemo","JavaScript can change HTML content.")
                ])),"*"),
            #
            #prueba 2 encender un foco
                cls(div("Ccard*test02",div("Ccontainer",[
                    h2(null,"What Can JavaScript Do ?"),
                    p(null,"JavaScript can change HTML attribute values."),
                    p(null,"In this case JavaScript changes the value of the src (source) attribute of an image."),
                    button("Tbutton Odocument.getElementById('myImage').src='./assets/imgs/pic_bulbon.gif'","Turn on the light"),
                    img("ImyImage S./assets/imgs/pic_bulboff.gif swidth:100px"),
                    button("Tbutton Odocument.getElementById('myImage').src='./assets/imgs/pic_bulboff.gif'","Turn off the light")
                ])),"*"),
            #
            #prueba 3 crear una barra de busqueda que al teclear me muestre resultados
                cls(div("Ccard*test03",div("Ccontainer",[
                    form(null,[
                        input("Ttext S30 OshowResult(this.value)"),
                        div("Ilivesearch")
                    ])
                ])),"*")
            #
        ]),
        footer(),
        script(null,changeContentOf("style","styles.php"))
    ])
]);
