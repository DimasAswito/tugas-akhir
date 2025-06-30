import { supabase } from '@/supabaseClient.js';

document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('register-form');
    const errorMessage = document.getElementById('error-message');
    const successMessage = document.getElementById('success-message');

    if (!registerForm) return;

    registerForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        const email = registerForm.email.value;
        const password = registerForm.password.value;

        errorMessage.textContent = '';
        successMessage.textContent = '';

        const { data, error } = await supabase.auth.signUp({
            email: email,
            password: password,
        });

        if (error) {
            errorMessage.textContent = 'Gagal mendaftar: ' + error.message;
        } else if (data.user) {
            successMessage.textContent = 'Pendaftaran berhasil! Anda akan diarahkan ke halaman login...';
            registerForm.reset();

            setTimeout(() => {
                window.location.href = '/login'; 
            }, 3000); 
        }
    });
});