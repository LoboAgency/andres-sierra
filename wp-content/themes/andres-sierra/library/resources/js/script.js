(function ($, window, document, undefined) {
    'use strict';

    function initReady() {
        
    }

    function initLoad() {
         $('.open-nav').click(function(){
            TweenMax.to('#main-menu', .50, { css: { right: 0  }, delay: .2, ease: Expo.linear });
            TweenMax.to(this, .50, { css: { visibility: 'hidden'  }, delay: .2, ease: Expo.linear });
            TweenMax.to('.close-nav', .50, { css: { visibility: 'visible'  }, delay: .2, ease: Expo.linear });
        });

         $('.close-nav').click(function(){
            TweenMax.to('#main-menu', .50, { css: { right: '-100%'  }, delay: .2, ease: Expo.linear });
            TweenMax.to(this, .50, { css: { visibility: 'hidden'  }, delay: .2, ease: Expo.linear });
            TweenMax.to('.open-nav', .50, { css: { visibility: 'visible'  }, delay: .2, ease: Expo.linear });
        });
    }

    $(document).on('ready', initReady);
    $(window).on('load', initLoad);
})(jQuery, window, document);