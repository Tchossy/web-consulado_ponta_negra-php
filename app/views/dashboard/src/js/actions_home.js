const baseURL =
  '/web-consulado_ponta_negra-php/app/views/dashboard/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const tbody = document.querySelector('tbody')
const todoList = document.getElementById('todo-list')
const num_utentes = document.getElementById('num_utentes')
const num_scheduling = document.getElementById('num_scheduling')
const num_documents_state = document.getElementById('num_documents_state')

const numUtentes = async () => {
  const dataUtentes = await fetch(
    origin_url + baseURL + 'homeController.php?typeAction=count_utentes'
  )
  const response = await dataUtentes.text()

  num_utentes.innerText = response
}
numUtentes()

const numScheduling = async () => {
  const dataScheduling = await fetch(
    origin_url + baseURL + 'homeController.php?typeAction=count_scheduling'
  )
  const response = await dataScheduling.text()

  num_scheduling.innerText = response
}
numScheduling()

const numStateDocument = async () => {
  const dataStateDocument = await fetch(
    origin_url + baseURL + 'homeController.php?typeAction=count_state_document'
  )
  const response = await dataStateDocument.text()

  num_documents_state.innerText = response
}
numStateDocument()

const listUtentes = async () => {
  const dataUtentes = await fetch(
    origin_url + baseURL + 'homeController.php?typeAction=get_utentes'
  )

  const response = await dataUtentes.text()

  tbody.innerHTML = response
}
listUtentes()

const listMessages = async () => {
  const dataMessages = await fetch(
    origin_url + baseURL + 'homeController.php?typeAction=get_messages'
  )

  const response = await dataMessages.text()

  todoList.innerHTML = response
}
listMessages()
