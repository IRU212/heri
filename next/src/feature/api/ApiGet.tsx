'use client'

export const ApiGet = async (url: string) => {
    const originUrl = 'http://localhost:8000/api/auth/register/store'
    const postData = {
        name: 'name'
    }

    const res = await fetch(`api/user/auth/register/store`,{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Access-Control-Allow-Origin': 'http://localhost',
            'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, OPTIONS',
            'Access-Control-Allow-Headers': 'Content-Type, Authorization',
        },
        body: JSON.stringify(postData),
    })

    const data = await res.json()
    return Response.json(data)
}
