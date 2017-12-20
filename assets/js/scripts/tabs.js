const tabs = document.querySelectorAll('.tablist li[role=tab]');
const panels = document.querySelectorAll('.panel[role=tabpanel]');

tabs.forEach((tab) => {
  tab.addEventListener('click', (e) => {
    tabs.forEach((tabInner) => { tabInner.setAttribute('aria-selected', false); });
    e.target.setAttribute('aria-selected', true);
    panels.forEach((panel) => { panel.setAttribute('aria-hidden', true); });
    const newPanel = document.getElementById(e.target.getAttribute('aria-controls'));
    newPanel.setAttribute('aria-hidden', false);
  });
});
