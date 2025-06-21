        attempts++;
        console.log(`  (Percobaan #${attempts}) Kirim form: ${email}`);
        try {
            const response = await axios.post(formUrl, qs.stringify(dataPayload), { headers: postHeaders });
            if (response.data.includes('The service is unavailable.')) {
                console.error('  [Gagal] Layanan tidak tersedia. Mencoba lagi...');
            } else {
                console.log(`  ✅ Berhasil kirim ke ${email}`);
                break;
            }
        } catch (error) {
            console.error(`  [Error di submitForm] ${error.message}`);
        }
    }
}

function generateEmail(baseEmail, index) {
    const [local, domain] = baseEmail.split('@');
    return `${local}+${index}@${domain}`;
}

async function startBotMassal(baseEmail, emailCount = 10) {
    const sessionData = await getSessionData();

    for (let i = 1; i <= emailCount; i++) {
        const email = generateEmail(baseEmail, i);
        await submitForm(email, sessionData);
    }

    console.log('\n🎉 Semua proses pengiriman selesai!');
}

// Contoh: Mengirim ke 10 email: bangico2002+1@gmail.com sampai +10
startBotMassal('negernadif@gmail.com', 100);
