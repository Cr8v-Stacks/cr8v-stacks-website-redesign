/* Shared folder stack animation behavior across all service pages. */
(function () {
  function initFolderStack() {
    var root = document.querySelector('.c8srv-root, .c8isv-root');
    if (!root) return false;
    var cards = root.querySelectorAll('.c8srv-folder-card');
    if (!cards.length) return false;
    if (root.getAttribute('data-c8-shared-stack') === '1') return true;
    root.setAttribute('data-c8-shared-stack', '1');
    var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function updateFolderStack() {
      if (reduceMotion) {
        cards.forEach(function (card) {
          card.style.setProperty('transform', 'none', 'important');
          card.style.setProperty('filter', 'none', 'important');
        });
        return;
      }
      var mobile = window.innerWidth < 900;
      var adminBar = document.getElementById('wpadminbar');
      var header = document.querySelector('.c8-header');
      var topOffset = (adminBar ? adminBar.offsetHeight : 0) + (header ? 30 : 0);
      var limit = (mobile ? 101 : 131) + topOffset;

      cards.forEach(function (card, i) {
        var rect = card.getBoundingClientRect();

        if (rect.top <= limit + 50) {
          var stackedAfter = 0;
          for (var j = i + 1; j < cards.length; j++) {
            var nextRect = cards[j].getBoundingClientRect();
            if (nextRect.top <= limit + 4) stackedAfter++;
          }
          var scale = 1 - (stackedAfter * 0.03);
          var lift = stackedAfter * -8;
          card.style.setProperty('transform', 'scale(' + scale + ') translate3d(0,' + lift + 'px,0)', 'important');
          card.style.setProperty('filter', 'brightness(' + (1 - (stackedAfter * 0.05)) + ')', 'important');
        } else {
          card.style.setProperty('transform', 'none', 'important');
          card.style.setProperty('filter', 'none', 'important');
        }
      });
    }

    window.addEventListener('scroll', updateFolderStack, { passive: true });
    window.addEventListener('resize', updateFolderStack);
    updateFolderStack();
    return true;
  }

  function start() {
    if (!initFolderStack()) window.setTimeout(initFolderStack, 350);
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', start, { once: true });
  else start();
})();
