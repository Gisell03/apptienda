<?php  include("vista/cabecera.php");?>

<section class="textos-header">
            <h1>Bienvenido a cleam world</h1>
            <h2>Buscamos incentivar a los ciudadanos a participar en la cultura de reciclaje </h2>
            <h1>Tu ya eres uno de ellos</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <section class="clientes contenedor">
            <div class="cards">
                <div class="card">
                    <div class="contenido-texto-card">
                        <h3>Mision</h3>
                        <p>Con este sitio web buscamos ofrecer las mejoras ropas de alta calidad en la ciudad y a buen precio.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="contenido-texto-card">
                        <h3>    Vision</h3>
                        <p>Buscamos convertirnos en un sitio web que impacte sea reconocida mundialmente y estar en las mejores pasarelas del mundo. </p>
                    </div>
                </div>
            </div>
        </section>
<?php  include("vista/pie.php");?>
<style>
    .cards{
    display: flex;
    justify-content: space-evenly;
}

.cards .card{
    background: #b9ffff;
    display: flex;
    width: 46%;
    height: 300px;
    align-items: center;
    justify-content: space-evenly;
    border-radius: 5px;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.6);
    -webkit-box-shadow: 10px 11px 22px -11px rgba(120,120,120,1);
    -moz-box-shadow: 10px 11px 22px -11px rgba(120,120,120,1);
    box-shadow: 10px 11px 22px -11px rgba(120,120,120,1);
}

.cards .card img{
    width: 200px;
    height: 100px;
    object-fit: cover;
    border: 3px solid #fff;
    border-radius: 50%;
    display: block;
}

.cards .card > .contenido-texto-card{
    width: 80%;
    color: black;
}

.cards .card > .contenido-texto-card p{
    font-weight: 300;
    padding-top: 5px;
    text-align: justify;
}
</style>
