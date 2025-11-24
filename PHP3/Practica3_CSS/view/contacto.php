<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de uso de CSS- contacto</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="../styles/styles.css"> -->
</head>
<body>
    <header>
      <div class=logo>
        <img src="../images/logoEjemplo.jpg" 
            title="Esto es una imagen de un logo" 
            alt="Aquí debería haber aparecido un logo"
            width="100" 
            height="85" 
        />
        <p>EmpreS.A.</p>
      </div>
    </header>
    <nav>
      <a href="../index.html" class=boton>
        <img width="64" height="64" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1"/>
        Inicio
      </a>
      <a href="../view/sobremi.html" class=boton>
        <img width="64" height="64" 
          src="https://img.icons8.com/external-creatype-outline-colourcreatype/64/external-eyes-basic-creatype-outline-colourcreatype.png" 
          alt="external-eyes-basic-creatype-outline-colourcreatype"/>
        Sobre mí
      </a>
      <a href="../view/contacto.html" class=boton>
        <img width="64" height="64" src="https://img.icons8.com/windows/64/database-mail--v1.png" alt="database-mail--v1"/>
        Contacto
      </a> 
    </nav>
    <div class="container">
      <aside>
        <h3>Menu</h3>
        <a href="#">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/search-more.png" alt="search-more"/>
          <span>Buscar</span>
        </a>
        <a href="#">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/cookie-jar.png" alt="cookie-jar"/>
          <span>Articulos</span>
        </a>
        <a href="#">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/discount--v1.png" alt="discount--v1"/>
          <span>Ofertas</span>
        </a>
        <a href="#">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/shopping-cart--v1.png" alt="shopping-cart--v1"/>
          <span>Carrito</span>
        </a>
        <a href="#">
          <img width="50" height="50" src="https://img.icons8.com/windows/64/accessibility1.png" alt="accessibility1"/>
          <span>Accesibilidad</span>
        </a>
      </aside>
        <section>
          <h1>Bienvenido a la sección Contacto</h1>
          <p style="letter-spacing:5px">¡Gracias por visitar la página de Contacto!</p>
          <p>
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
						occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et 
						expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda 
						est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non 
						recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipiscing elit id, dis mattis sociosqu mus sem dui eget montes hendrerit, vivamus eu leo risus libero pharetra non. Arcu 
						ornare malesuada urna curabitur posuere odio nisi convallis, cursus dictumst porta tempus nunc mauris cubilia mi, non interdum consequat ad porttitor senectus orci. 
						Sed potenti tellus dui aliquam aliquet aenean platea convallis cursus, in netus sollicitudin vivamus vel habitant nostra vehicula conubia nulla, neque turpis 
						facilisis inceptos maecenas ac hendrerit fermentum.
					</p>
					<!-- Formulario de Contacto -->
					<div> 
						<form action="https://example.com/send-email" method="POST">
							<h1>Formulario de Contacto</h1>
							<label for="name">Nombre:</label>
							<input type="text" id="name" name="name" placeholder="Tu nombre" required>
					
							<label for="email">Correo Electrónico:</label>
							<input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
					
							<label for="subject">Asunto:</label>
							<input type="text" id="subject" name="subject" placeholder="Asunto del mensaje" required>
					
							<label for="message">Mensaje:</label>
							<textarea id="message" name="message" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
					
							<button type="submit">Enviar</button>
						</form>
				</div>
        </section>
    </div>
    <footer>
        <p>© 2025 Mi Página Web</p>
    </footer>
</body>
</html>
