'use client'

export const ApiPost = async (url: string) => {
    const response = await fetch('http://localhost/api/user/auth/register/store', {
        method: 'POST',
        mode: 'cors',
        body: JSON.stringify({ name: "Irakli Tchigladze" }),
    })
    const data = await response.json()
    console.log(data)
    return data;
}
