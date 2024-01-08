import { createRoot } from 'react-dom/client'
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import '../scss/app.scss'
// ユーザ側
import UserAuthCreate from './component/page/user/auth/Create'
import TopIndex from './component/page/user/top/Index'

const container = document.getElementById('app')
const root = createRoot(container!)

// Routeを記載する
root.render(
    <div>
        <BrowserRouter>
        {/* 管理側 */}
        <Routes>
        </Routes>
        {/* ユーザ側 */}
        <Routes>
            <Route path="/" element={<TopIndex />} />
        </Routes>
        </BrowserRouter>
    </div>
)
