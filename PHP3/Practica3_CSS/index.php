<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Título de la página web -->
    <title>Ejemplo de uso de CSS- Inicio</title>
    <!-- Código de caracteres de europa occidental -->
    <meta charset="UTF-8"/>
    <!-- Para un correcto escalado en dispositivos móviles (contenido ajustado al tamaño de la pantalla del dispositivo)-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlazamos el archivo de estilos -->
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
    <header>
      <div class=logo>
        <img src="images/logoEjemplo.jpg" 
            title="Esto es una imagen de un logo" 
            alt="Aquí debería haber aparecido un logo"
            width="100" 
            height="85" 
        />
        <p>EmpreS.A.</p>
      </div>
    </header>
    <nav>
      <a href="#" class=boton>
        <img width="64" height="64" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1"/>
        Inicio
      </a>
      <a href="view/sobremi.html" class=boton>
        <img width="64" height="64" 
          src="https://img.icons8.com/external-creatype-outline-colourcreatype/64/external-eyes-basic-creatype-outline-colourcreatype.png" 
          alt="external-eyes-basic-creatype-outline-colourcreatype"/>
        Sobre mí
      </a>
      <a href="view/contacto.html" class=boton>
        <img width="64" height="64" src="https://img.icons8.com/windows/64/database-mail--v1.png" alt="database-mail--v1"/>
        Contacto
      </a> 
    </nav>
    <div class=container>
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
        <h1>Bienvenido a mi página web</h1>
        <p style="letter-spacing:5px">¡Gracias por visitar mi página web!</p>
        <p class="txtJustify">
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, 
          similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi 
          optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum 
          necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias 
          consequatur aut perferendis doloribus asperiores repellat.
        </p>
        <p class="txtJustify">
          But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but 
          because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires 
          to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial 
          example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to 
          enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
        </p>
      </section>
    </div>
    <footer>
      <p>© 2025 Mi Página Web</p>
    </footer>
</body>
</html>
