const moreWorks = document.querySelector('#moreworksAction');
const galeryAction = document.querySelector('.gallary--action');

moreWorks.addEventListener('click', (e) => {
      e.preventDefault();
      const body = document.querySelector('body');
      const galery = document.querySelector('#galery');
      galery.classList.toggle('dn');
      if(!galery.classList.contains('dn')) {
            body.style.overflow = 'hidden';
            galery.classList.add('galery--active');
            setTimeout(() => {
                  galery.classList.remove('galery--active');
            }, 400);
      } else {
            body.style.overflow = 'scroll';
      }     
});

galeryAction.addEventListener('click', (e)=> {
      e.preventDefault();
      const galery = document.querySelector('#galery');
      document.querySelector('body').style.overflow = 'scroll';

      if(!galery.classList.contains('dn')) {
            galery.classList.add('galery--nactive');
            setTimeout(() => {
                  galery.classList.remove('galery--nactive');
                  galery.classList.add('dn');
            }, 400);
      }
});