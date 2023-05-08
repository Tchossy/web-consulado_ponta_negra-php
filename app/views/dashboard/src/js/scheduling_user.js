const baseURL =
  '/web-consulado_ponta_negra-php/app/views/dashboard/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const tbody = document.querySelector('tbody')

const cardForm = document.getElementById('schedulingForm')
const msgAlerta = document.getElementById('msgAlertaErroCad')

const btnExit = document.getElementById('btn_exit')

const email_true = localStorage.getItem('email_user')

const listUsers = async real_email_user => {
  const dataUsers = await fetch(
    origin_url +
      baseURL +
      'schedulingUserControllers.php?typeForm=get_scheduling&realEmailUser=' +
      real_email_user
  )

  const response = await dataUsers.text()

  tbody.innerHTML = response
}

listUsers(email_true)

cardForm.addEventListener('submit', async event => {
  event.preventDefault()

  const dataForm = new FormData(cardForm)
  dataForm.append('add', 1)

  const dataNewUser = await fetch(
    origin_url +
      baseURL +
      'schedulingUserControllers.php?typeForm=create_scheduling',
    {
      method: 'POST',
      body: dataForm
    }
  )

  const response = await dataNewUser.json()

  if (response['error']) {
    msgAlerta.innerHTML = response['msg']
  } else {
    msgAlerta.innerHTML = response['msg']
    cardForm.reset()
  }

  listUsers(email_true)

  setTimeout(() => {
    msgAlerta.innerHTML = ''
  }, 5000)
})
