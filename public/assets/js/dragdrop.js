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
    // Сбор ID в порядке после дропа
    const neworder = Array.from(this.getRows()).map(tr => tr.dataset.id);
    this.sendTagOrder(neworder);
  }

  getCurrentOrder() {
    return Array.from(this.tbody.querySelectorAll('tr')).map(row => row.innerText.trim());
  }

  // Отправляет порядок на сервер
  sendTagOrder(order) {
     fetch('/admin/tags/reorder', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': window.Laravel.csrfToken // Laravel CSRF
      },
      body: JSON.stringify({ order })
    })
    //.then(res => res.json())
    //.then(data => console.log('Порядок сохранен', data))
    .catch(err => console.error('Ошибка сохранения порядка', err));
  }



}
