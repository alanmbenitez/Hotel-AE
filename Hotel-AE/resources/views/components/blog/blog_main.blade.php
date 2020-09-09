<main class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- ITEM -->
                <article class="blog_list">
                    <figure>
                        <a href="blog-post.html" class="hover_effect h_link h_blue">
                            <img src="{{asset('images/blog/jardin.jpg')}}" class="img-responsive" alt="Image">
                        </a>
                    </figure>
                    <div class="details">
                        <h2><a href="blog-post.html">Jardin Japones</a></h2>
                       
                        <p>Rodeado por los Bosques de Palermo, el Jardín Japonés es un rincón de Buenos Aires que enamora a quien lo visite. Construido en 1967 en ocasión de la visita del emperador de Japón Akihito y su esposa Michiko, se trata del jardín de estilo japonés más grande fuera del país nipón. Caminar entornado por bonsais, azaleas, kokedamas, orquídeas y faroles de cemento es un placer inolvidable. Tiene también un Chashitsu (casa de té): un espacio construido especialmente para llevar a cabo la tradicional ceremonia del té japonesa. Ornamentado con elementos tradicionales, cuyo interior fue importado desde Japón, algunos de sus componentes datan de hasta más de cien años de antigüedad. Su exquisito interior se encuentra confeccionado de forma artesanal. Una sala de arte y un restaurante completan la visita.</p>
                        <a class="button btn_blue " target="_blank" href="https://turismo.buenosaires.gob.ar/es/otros-establecimientos/jard%C3%ADn-japon%C3%A9s"><i class="fa fa-angle-double-right"></i> Leer Mas </a>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                @component('components.general.Form_reserva')
                @endcomponent
            </div>
        </div>