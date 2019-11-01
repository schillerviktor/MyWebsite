<?php FrontController::show("layouts/header") ?>

<section>
    <h4>Főoldal</h4>
    <article>
        Hi, I'm Schiller Viktor from Szeged. I currently work as freelance LEGO designer 
		and I learn in a Janos Neumann University. Since 2016, I designed more than 5 LEGO
		models for my children, spacing from simple brick models, to motorized Technic 
		contraptions for various skill levels, and advanced Lego-BOOST and Mindstorms 
		robotic creations. I also worked as a freelance LEGO designer for myself as a
		hobby. If you have any questions or need further information about web-design
		solutions or LEGO-Robot creations, please feel free to contact me on the "Kapcsolat"
		page.
    </article>
    <article class="row">
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image members waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Partnerek & Oldalak
                    </span>
                    <p><a href=/?page=members>Tovább</a></p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image map waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Térkép
                    </span>
                    <p><a href=/?page=map>Tovább</a></p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image contact waves-effect waves-block waves-light">
                    <div class="activator"></div>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Kontakt
                    </span>
                    <p><a href=/?page=contact>Tovább</a></p>
                </div>
            </div>
        </div>
    </article>
</section>

<?php FrontController::show("layouts/footer") ?>
