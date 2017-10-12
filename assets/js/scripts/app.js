'use strict';

const mobileTrigger = document.querySelector('.js-mobile-nav');
const bodyEle = document.querySelector('body');

mobileTrigger.addEventListener('click', () => {
  bodyEle.classList.toggle('is--open');
}, false);
