import { supabase } from '@/supabaseClient.js';

async function createServerSession(session) {
    if (!session) return;

    try {
        const response = await fetch('/auth/callback', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ accessToken: session.access_token })
        });

        if (response.ok) {
            window.location.href = '/admin/dashboard';
        } else {
            document.getElementById('error-message').textContent = 'Gagal memverifikasi sesi di server.';
        }
    } catch (error) {
        console.error('Error saat membuat sesi server:', error);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('login-form');
    const googleLoginButton = document.getElementById('google-login');
    const errorMessage = document.getElementById('error-message');

    if (!loginForm) return;

    // --- ALUR LOGIN EMAIL/PASSWORD ---
    loginForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        errorMessage.textContent = '';
        const email = loginForm.email.value;
        const password = loginForm.password.value;

        const { data, error } = await supabase.auth.signInWithPassword({ email, password });

        if (error) {
            errorMessage.textContent = 'Login gagal: ' + error.message;
        } else if (data.session) {
            await createServerSession(data.session);
        }
    });

    // Handler login Google
    googleLoginButton.addEventListener('click', async () => {
        await supabase.auth.signInWithOAuth({
            provider: 'google',
            options: {
                redirectTo: window.location.origin + '/login'
            }
        });
    });

    supabase.auth.getSession().then(({ data: { session } }) => {
        if (session) {
            createServerSession(session);
        }
    });
});