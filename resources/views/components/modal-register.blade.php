<style>
    .modalBackground{
     margin: 0 auto;
     background-color:rgba(0, 0, 0, 0.2);
     width: 100vw;
     height: 100vh;
     display: flex;
     justify-content: center;
     align-items: center;
    }
    .modalContent{
     border-radius: 20px;
     width: 700px;
     height: 563px; 
     background-color: white;
    }
    .modal__content__exitButton{
     border: none;
     margin: 3% 3% 0 90%;
    }
    .modal__content__title{
     color: #25292D;
     font-size: 24px;
     font-weight: 700;
     text-align: left;
     margin: 5%;
    }
    .modal__content__dataInputs{
     display: grid;
     grid-column: 2;
     grid-column-gap: 20px;
     grid-row-gap: 20px;
     width: 100%;
     margin-left: 5%;
     margin-right: 5%;
    }
    .modal__content__formButtons{
     display: flex;
     margin: 5% 5% 5% 5%;
     justify-content: space-between;
    }
    .registerButton{
         align-items: center;
         width: 278px;
         height: 60px;
         border-radius: 16px;
         background-color: orange;
         border: none;
         color: white;
         font-weight: 600;
         font-size: 18px;
         align-content: center;
     }
     .registerButton__text{
         font-weight: 600;
         font-size: 18px;
         margin-top: 10px;
     }
    .cancelButton{
         align-items: center;
         width: 278px;
         height: 60px;
         border-radius: 16px;
         background-color: white;
         border: 1px solid orange;
         color: orange;
         font-weight: 600;
         font-size: 18px;
         align-content: center;
    }
    .cancelButton__text{
         font-weight: 600;
         font-size: 18px;
         margin-top: 10px;
    }
    input{
     padding: 20px;
     background-color: white;
     width: 90%;
     height: 50px;
     border-radius: 16px;
     border: 1px solid #9196A166;
    }
    .toLoginLink{
     align-items: center;
     color: #FDB100;
     font-weight: 600;
     font-size: 18px;
     text-decoration: underline;
    }
    .modal__content__dataInputs__passwords{
        display: flex;
    }
    .password{
        width: 278px;
        height: 60px;
        margin-left: 0%;
        margin-right: 5%;
    }
    .anotherPassword{
        width: 278px;
        height: 60px;
        margin-left: 5%;
    }
    .helperText{
        text-align: left;
        margin: 0 0 0 5%;
        color: #25292D4D;
        font-size: 12px;
        font-weight: 400;
    }
 </style>
 
<div class='modalBackground'>
    <div class='modalContent'>
        <button class='modal__content__exitButton'>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#9196A1" fill-opacity="0.4"/>
            </svg>                                     
        </button>
        <p class='modal__content__title'>
            {{ __('Регистрация') }}
        </p>
        <form>
            <div class='modal__content__dataInputs'>
                <input placeholder="Имя" type='text'>
                <input placeholder="Логин" type='text'>
                <div class='modal__content__dataInputs__passwords'>
                   <input class='password' placeholder='Пароль' type='password'>
                   <input class='anotherPassword' placeholder='Повторите пароль' type='password'>
                </div>
            </div>
            <p class='helperText'>
               Минимум 8 символов
            </p>
            <div class='modal__content__formButtons'>
                <button class='registerButton'>
                    <p class='registerButton__text'>
                        {{ __('Зарегистрироваться') }}
                    </p>
                </button>
                <button class='cancelButton'>
                    <p class='cancelButton__text'>
                        {{ __('Отмена') }}
                    </p>
                </button>
            </div>
        </form>
        <a 
            class='toLoginLink' 
            href='{{ route('login')}}'>
                {{ __('У меня уже есть аккаунт') }}
        </a>
    </div>
</div>