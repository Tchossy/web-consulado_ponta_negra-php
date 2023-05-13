const baseURL =
  '/web-consulado_ponta_negra-php/app/views/dashboard/src/controllers/'
const controllerURL = '/web-consulado_ponta_negra-php/app/controllers/'

const origin_url = window.location.origin

const cardForm = document.getElementById('loginForm')
const msgAlerta = document.getElementById('msgAlertaErroCad')

cardForm.addEventListener('submit', async event => {
  event.preventDefault()

  const dataForm = new FormData(cardForm)
  dataForm.append('add', 1)

  const dataNewUser = await fetch(
    origin_url + baseURL + 'admControllers.php?type_form=login_adm',
    {
      method: 'POST',
      body: dataForm
    }
  )

  const response = await dataNewUser.json()

  console.log(response)

  if (response['error']) {
    msgAlerta.innerHTML = response['msg']
  } else {
    console.log(response['msg'])
    msgAlerta.innerHTML = response['msg']
    localStorage.setItem('adm_email', response['adm_email'])
    localStorage.setItem('adm_name', response['adm_name'])
    window.location.reload()
  }

  setTimeout(() => {
    msgAlerta.innerHTML = ''
  }, 3000)
})
