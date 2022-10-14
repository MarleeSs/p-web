<?php

namespace Meta;

class Footer
{

    public static function footer(?string $dir = null): void
    {
        $footer = <<<FOOTER
                    <footer class="pt-3 mt-4 text-muted border-top">
                            &copy; 2022
                    </footer>
            
                  <script src="$dir ../Meta/src/js/bootstrap.bundle.min.js"></script>
             </div>
        </body>
    </html>
FOOTER;
        echo $footer;

    }
}
