(function() {
  class BaseComp {
    constructor(props) {
      this.setData(props)
    }
    setData(dataObj) {
      if (!dataObj) {
        return
      }
      for (const [key, val] of Object.entries(dataObj)) {
        this[key] = val
      }
    }
    hideElement(el) {
      el.classList.add('hidden')
    }
    showElement(el) {
      el.classList.remove('hidden')
    }
  }
  
  class TaskCard extends BaseComp {
    constructor(props) {
      super(props)

      this.initRootEl()
      this.hideElement(this.updateBtnEl)
      
      this.bindHandlers()
      this.listenToClick()
      this.listenToDragStart()
      this.listenToDragEnd()
    }
    
    initRootEl() {
      this.rootEl = document.createElement('form')
      this.rootEl.className = 'task-card'
      this.rootEl.setAttribute('draggable', 'true')
      this.rootEl.innerHTML = `
        <div class="task-card__row">
          <label class="task-card__label">
            Name: <input class="task-card__input task-card__name-input" type="text" disabled
            value="${this.name}">
          </label>
        </div>
        <div class="task-card__row">
          <label class="task-card__label">
            Description: <textarea class="task-card__input task-card__desc-textarea" disabled>${this.desc}</textarea>
          </label>
        </div>
        <div class="task-card__row">
          <button class="task-card__btn task-card__edit-btn" type="button">Edit</button>
          <button class="task-card__btn task-card__delete-btn" type="button">Delete</button>
          <button class="task-card__btn task-card__update-btn" type="button">Update</button>
        </div>
      `
    }
    removeRootEl() {
      this.rootEl.remove()
    }
    enableAllFields() {
      this.nameInputEl.removeAttribute('disabled')
      this.descTextareaEl.removeAttribute('disabled')
    }
    disableAllFields() {
      this.nameInputEl.setAttribute('disabled', '')
      this.descTextareaEl.setAttribute('disabled', '')
    }
    focusNameInputEl() {
      this.nameInputEl.focus()
    }
    
    get nameInputEl() {
      return this.rootEl.querySelector('.task-card__name-input')
    }
    get descTextareaEl() {
      return this.rootEl.querySelector('.task-card__desc-textarea')
    }
    get editBtnEl() {
      return this.rootEl.querySelector('.task-card__edit-btn')
    }
    get deleteBtnEl() {
      return this.rootEl.querySelector('.task-card__delete-btn')
    }
    get updateBtnEl() {
      return this.rootEl.querySelector('.task-card__update-btn')
    }

    bindHandlers() {
      this.handleClick = this.handleClick.bind(this)
      this.handleDragStart = this.handleDragStart.bind(this)
      this.handleDragEnd = this.handleDragEnd.bind(this)
    }
    listenToClick() {
      this.rootEl.addEventListener('click', this.handleClick)
    }
    handleClick(e) {
      const currentTarget = e.target
      if (currentTarget === this.editBtnEl) {
        this.enableAllFields()
        this.focusNameInputEl()
        
        this.hideElement(this.editBtnEl)
        this.hideElement(this.deleteBtnEl)
        this.showElement(this.updateBtnEl)
      } else if (currentTarget === this.updateBtnEl) {
        this.disableAllFields()
        this.onUpdate(this)
        
        this.showElement(this.editBtnEl)
        this.showElement(this.deleteBtnEl)
        this.hideElement(this.updateBtnEl)
      } else if (currentTarget === this.deleteBtnEl) {
        this.onDelete(this)
        this.removeRootEl()
      }
    }
    listenToDragStart() {
      this.rootEl.addEventListener('dragstart', this.handleDragStart)
    }
    handleDragStart(e) {
      this.onDragStart(this)
    }
    listenToDragEnd() {
      this.rootEl.addEventListener('dragend', this.handleDragEnd)
    }
    handleDragEnd(e) {
      this.onDragEnd()
    }
  }
  
  class TaskList extends BaseComp {
    constructor(props) {
      super(props)

      this.initRootEl()
      this.updateAllTaskCards()
      
      this.bindHandlers()
      this.listenToDragOver()
      this.listenToDragStart()
      this.listenToDragEnd()
    }
    initRootEl() {
      this.rootEl = document.createElement('article')
      this.rootEl.className = 'task-list'
      this.rootEl.setAttribute('draggable', 'true')
      this.rootEl.innerHTML = `
        <h3 class="task-list__heading">${this.name}</h3>
        <div class="task-list__content"></div>
      `
    }
    appendTaskCard({name, desc}) {
      const taskCard = new TaskCard({
        name,
        desc,
        onUpdate: this.onTaskCardUpdate,
        onDelete: this.onTaskCardDelete,
        onDragStart: this.onTaskCardDragStart,
        onDragEnd: this.onTaskCardDragEnd
      })
      this.contentEl.appendChild(taskCard.rootEl)
    }

    appendAllTaskCards() {
      this.tasks.forEach((task) => {
        this.appendTaskCard(task)
      })
    }
    /*
    removeTaskCard(taskCardEl) {
      console.log(this.contentEl, taskCardEl)
      
      this.contentEl.removeChild(taskCardEl)
    }
    */
    removeAllTaskCards() {
      while (this.contentEl.lastElementChild) {
        this.contentEl.removeChild(this.rootEl.lastElementChild)
      }
    }
    updateAllTaskCards() {
      this.removeAllTaskCards()
      this.appendAllTaskCards()
    }
    get contentEl() {
      return this.rootEl.querySelector('.task-list__content')
    }
    get taskCardEls() {
      return this.contentEl.children
    }
    
    bindHandlers() {
      this.handleDragOver = this.handleDragOver.bind(this)
      this.handleDragStart = this.handleDragStart.bind(this)
      this.handleDragEnd = this.handleDragEnd.bind(this)
    }
    listenToDragOver() {
      this.contentEl.addEventListener('dragover', this.handleDragOver)
    }
    handleDragOver(e) {
      e.preventDefault()
      e.stopPropagation()

      const currentClientY = e.clientY
      let nextTaskCardEl = null
      for (const taskCardEl of this.taskCardEls) {
        const taskCardTop = taskCardEl.getBoundingClientRect().top
        if (taskCardTop > currentClientY) {
          nextTaskCardEl = taskCardEl
          break
        }
      }
      this.onTaskListDragOver(nextTaskCardEl, this.contentEl)
    }
    listenToDragStart() {
      this.rootEl.addEventListener('dragstart', this.handleDragStart)
    }
    handleDragStart() {
      this.onTaskListDragStart(this)
    }
    listenToDragEnd() {
      this.rootEl.addEventListener('dragend', this.handleDragEnd)
    }
    handleDragEnd() {
      this.onTaskListDragEnd()
    }
  }
  
  class TaskListGroup extends BaseComp {
    constructor(props) {
      super(props)
      
      this.setData({
        draggedTaskCard: null,
        draggedTaskList: null
      })
      
      this.bindHandlers()
      this.bindCallbacks()
      
      this.initRootEl()
      this.updateAllTaskLists()
      
      this.listenToDragOver()
    }
    
    get draggedTaskCardEl() {
      return this.draggedTaskCard.rootEl
    }
    get draggedTaskListEl() {
      return this.draggedTaskList.rootEl
    }
    
    initRootEl() {
      this.rootEl = document.createElement('section')
      this.rootEl.className = 'task-list-group'
      this.rootEl.innerHTML = `
        <h2 class="task-list-group__heading">Task lists</h2>
        <div class="task-list-group__content"></div>
      `
    }
    appendTaskList({name, tasks}) {
      const taskList = new TaskList({
        name,
        tasks,
        onTaskCardUpdate: this.onTaskCardUpdate,
        onTaskCardDelete: this.onTaskCardDelete,
        onTaskCardDragStart: this.onTaskCardDragStart,
        onTaskCardDragEnd: this.onTaskCardDragEnd,
        onTaskListDragOver: this.onTaskListDragOver,
        onTaskListDragStart: this.onTaskListDragStart,
        onTaskListDragEnd: this.onTaskListDragEnd
      })
      this.contentEl.appendChild(taskList.rootEl)
    }
    appendAllTaskLists() {
      this.lists.forEach((list) => {
        this.appendTaskList(list)
      })
    }
    removeAllTaskLists() {
      while (this.contentEl.lastElementChild) {
        this.contentEl.removeChild(this.rootEl.lastElementChild)
      }
    }
    updateAllTaskLists() {
      this.removeAllTaskLists()
      this.appendAllTaskLists()
    }
    get contentEl() {
      return this.rootEl.querySelector('.task-list-group__content')
    }
    get taskListEls() {
      return this.contentEl.children
    }
    
    bindHandlers() {
      this.handleDragOver = this.handleDragOver.bind(this)
    }
    listenToDragOver() {
      this.rootEl.addEventListener('dragover', this.handleDragOver)
    }
    handleDragOver(e) {
      e.preventDefault()
      e.stopPropagation()
      
      const currentClientX = e.clientX
      let nextTaskListEl = null
      for (const taskListEl of this.taskListEls) {
        const taskListLeft = taskListEl.getBoundingClientRect().left
        if (taskListLeft >= currentClientX) {
          nextTaskListEl = taskListEl
          break
        }
      }
      if (nextTaskListEl !== this.draggedTaskListEl) {
        if (nextTaskListEl) {
          this.contentEl.insertBefore(this.draggedTaskListEl, nextTaskListEl)
        } else {
          this.contentEl.appendChild(this.draggedTaskListEl)
        }
      }
    }
    
    bindCallbacks() {
      this.onTaskCardDragStart = this.onTaskCardDragStart.bind(this)
      this.onTaskCardDragEnd = this.onTaskCardDragEnd.bind(this)
      
      this.onTaskListDragOver = this.onTaskListDragOver.bind(this)
      this.onTaskListDragStart = this.onTaskListDragStart.bind(this)
      this.onTaskListDragEnd = this.onTaskListDragEnd.bind(this)
    }
    onTaskCardDragStart(taskCard) {
      this.setData({
        draggedTaskCard: taskCard
      })
    }
    onTaskCardDragEnd() {
      this.setData({
        draggedTaskCard: null
      })
    }
    
    onTaskListDragOver(nextTaskCardEl, taskListEl) {
      if (this.draggedTaskCard) {
        if (nextTaskCardEl !== this.draggedTaskCardEl) {
          if (nextTaskCardEl) {
            taskListEl.insertBefore(this.draggedTaskCardEl, nextTaskCardEl)
          } else {
            taskListEl.appendChild(this.draggedTaskCardEl)
          }
        }
      }
    }
    onTaskListDragStart(taskList) {
      this.setData({
        draggedTaskList: taskList
      })
    }
    onTaskListDragEnd() {
      this.setData({
        draggedTaskList: null
      })
    }
  }
  
  const taskListGroup = new TaskListGroup({
    lists: [
      {
        name: 'List 1',
        tasks: [
          {
            name: 'no. 1',
            desc: 'abc',
          },
          {
            name: 'no. 2',
            desc: 'zzz',
          }
        ]
      },
      {
        name: 'List 2',
        tasks: [
          {
            name: 'no. 3',
            desc: 'xyz'
          }
        ]
      }
    ],
    onTaskCardUpdate: (taskInfo) => {
      console.log(taskInfo)
      //todo: update data
    },
    onTaskCardDelete: (taskInfo) => {
      console.log(taskInfo)
      //todo: update data
    },

  })

  
  
  

  document.querySelector('body').appendChild(taskListGroup.rootEl)

  
  /*
  class TaskUpdater extends BaseComp {
    constructor(props) {
      super(props)
      
      this.setData({
        activeType: 'task'
      })
      
      this.initRootEl()
    }
    initRootEl() {
      this.rootEl = document.createElement('form')
      this.rootEl.className = 'task-updater'
      this.rootEl.innerHTML = `
        <fieldset class="task-updater__fieldset">
          <legend class="task-updater__legend">
            Select update type
          </legend>
          <label class="task-updater__label">
            <input class="task-updater__task-radio" type="radio">
            Task
          </label>
          <label class="task-updater__label">
            <input class="task-updater__list-radio" type="radio">
            Task List
          </label>
        </fieldset>
        <fieldset class="task-updater__fieldset">
          <legend class="task-updater__legend">
            Enter task or task list information
          </legend>
          <label class="task-updater__label">
            <input class="task-updater__task-name-input" type="text">
            Task Name
          </label>
          <label class="task-updater__label">
            <textarea class="task-updater__task-desc-input"></textarea>
            Task Description
          </label>
          <label class="task-updater__label">
            <select class="task-updater__task-list-select"></select>
          </label>
        </fieldset>
      `
    }
  }
  */
})()


/*
TaskUpdater
- props
  - mode
    - 'add' || 'edit'
  - type
    - 'task' || 'list'
  - taskName
  - taskDesc
  - listName
  - onSubmit
- UI
  - form
    - label
    - radio input
      - 'task' || 'list'
    - task fieldset
      - legend
      - label
      - text input
        - task name
        - task desc
        - task list name
    - list fieldset
      - legend
      - label
      - text input
        - task list name
    - button
      - emit form data throught onSubmit
      
TaskCard
- props
  - name
  - desc
  - onEdit
  - onDelete
- UI
  - article
    - h4
      - name
    - p
      - desc
    - button
      - edit
        - emit current task card instance through onEdit
      - delete
        - emit current task card instance through onDelete
 
TaskList
- props
  - name
  - tasks
  - onListEdit
  - onListDelete
  - onTaskEdit
  - onTaskDelete
- UI
  - article
    - h3
      - name
    - button
      - edit
        - emit current task list instance through onListEdit
      - delete
        - emit current task list instance through onListDelete
    - taskCard
      - each task
      - pass onTaskEdit for onEdit
      - pass onTaskDelete for onDelete
      - through a method
        - remove target task card

TaskListGroup
- props
  - onListEdit
  - onListDelete
  - onTaskEdit
  - onTaskDelete
- UI
  - section
    - h2
      - off screen?
    - TaskList
      - through a method
        - pass in name and tasks
        - append for each new task list through a method
      - throught another method
        - remove target list
      
TaskView
- states
  - updaterMode
    - initial: 'add'
    - 'add' || 'edit'
  - updaterType
    - initial: 'task'
    - 'task' || 'list'
  - currentTaskCard
    - initial: null
  - taskList
    - initial: []
    - e.g.:[
    {
      name: 'todo',
      tasks: [
        {
          name: 'a',
          desc: 'abc'
        },
        {
          name: 'b',
          desc: 'cba'
        }
      ]
    },
    {
      name: 'working',
      tasks: [
        {
          name: 'c',
          desc: 'abc'
        }
      ]
    },
    {
      name: 'completed',
      tasks: []
    }
  ]
- UI
  - section
    - taskUpdater
      - pass onTaskUpdaterSubmit for onSubmit
    - taskListGroup
      - pass onListEdit, onListDelete, onTaskEdit, onTaskDelete
- methods
  - onTaskUpdaterSubmit
    - receive task data object
    - if updaterMode = 'add'
      - if list not found, push new list to taskList
      - push new task to taskList's corresponding list's tasks
    - if updaterMode = 'edit'
      - update task name and/or desc if needed in taskList
*/