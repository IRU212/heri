"use client"
import { useState } from "react"
import InputText from "@/components/ui/form/InputText"
import NormalText from "@/components/ui/text/NormalText"
import { ApiPost } from "@/feature/api/ApiPost"

export default function Register() {
    const [name, setName] = useState("")
    const [email, setEmail] = useState("")
    const [password, setPassword] = useState("")

    const handleNameChange = (e: string) => {
        setName(e)
    }
    const handleEmailChange = (e: string) => {
        setEmail(e)
    }
    const handlePasswordChange = (e: string) => {
        setPassword(e)
    }

    const postClick = async () => {
        const data = ApiPost('api/auth/register/store')
    }

    return (
        <div className="main-content-item-cover">
            <NormalText className="text-center margin-bottom20" fontSize={22} text="ログイン" />
            <div className="main-content-item">
                <InputText
                    className="auth-input-text margin-bottom20"
                    name="name"
                    initValue=""
                    placeholder="ユーザ名を入力して下さい"
                    handleValueChange={handleNameChange}
                />
                <InputText
                    className="auth-input-text margin-bottom20"
                    name="email"
                    initValue=""
                    placeholder="メールアドレスを入力して下さい"
                    handleValueChange={handleEmailChange}
                />
                <InputText
                    className="auth-input-text margin-bottom20"
                    name="password"
                    initValue=""
                    placeholder="パスワードを入力して下さい"
                    handleValueChange={handlePasswordChange}
                />
            </div>
            <div className="main-content-item">
                <div className="width-fit margin-left" onClick={postClick}>
                    新規登録
                </div>
            </div>
        </div>
    )
}
