    <footer id="contact">

        <div class="footer-main content">
            <article><i class="far fa-envelope"></i>Alguma dúvida?</article>
            <article><i class="fas fa-mobile-alt"></i>Ligamos para você</article>
            <article><i class="fab fa-whatsapp"></i>Fale pelo whatsApp</article>
        </div>

        <div class="footer-main-content content">

            <div class="footer-main-logo-primary">                
                @if ( has_custom_logo() )
                {{the_custom_logo()}}
                @else
                {{ $siteName }}
                  @endif
            </div>

            <div class="footer-main-logo-secundary">
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-linkedin"></i></li>
                    <li><i class="fab fa-youtube"></i></li>
                </ul>
            </div>

        </div>

        <div class="footer-main-copyright content">
            <p>Copyright © 2020 - Rits Tecnologia. Todos os direitos reservados. <u>Política de Privacidade</u></p>
            <span>Rits</span>
        </div>

    </footer>