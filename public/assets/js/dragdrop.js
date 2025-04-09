/*
* Bootstrap Table Drag&Drop Re-Sort Order
*/


class TableRowSorter {

  constructor(tbodySelector) {
    this.tbody = document.querySelector(tbodySelector);
    this.draggedRow = null;

    this.init();
  }

  init() {
    this.getRows().forEach(row => {
      row.addEventListener('dragstart', this.handleDragStart.bind(this));
      row.addEventListener('dragover', this.handleDragOver.bind(this));
      row.addEventListener('drop', this.handleDrop.bind(this));
      row.addEventListener('dragend', this.handleDragEnd.bind(this));
    });
  }

  getRows() {
    return this.tbody.querySelectorAll('tr[draggable="true"]');
  }

  handleDragStart(e) {
    this.draggedRow = e.target;
    e.target.classList.add('opacity-50');
  }

  handleDragOver(e) {
    e.preventDefault();
    const target = e.target.closest('tr');
    if (target && target !== this.draggedRow && target.parentNode === this.tbody) {
      const rect = target.getBoundingClientRect();
      const next = (e.clientY - rect.top) > (rect.height / 2);
      this.tbody.insertBefore(this.draggedRow, next ? target.nextSibling : target);
    }
  }

  handleDrop(e) {
    e.preventDefault();
  }

  handleDragEnd(e) {
    e.target.classList.remove('opacity-50');
  }

  getCurrentOrder() {
    return Array.from(this.tbody.querySelectorAll('tr')).map(row => row.innerText.trim());
  }
}
