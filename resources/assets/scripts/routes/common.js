import Wow from 'wow.js';
import '@fortawesome/fontawesome-free/js/all.js';

export default {
  init() {
    const wow = new Wow();
    wow.init();
    // JavaScript to be fired on all pages
    $( '.carousel-item' ).first().addClass('active');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
