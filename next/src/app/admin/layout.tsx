import type { Metadata } from 'next'
import { Inter } from 'next/font/google'

const inter = Inter({ subsets: ['latin'] })

export const metadata: Metadata = {
    title: 'HERI管理',
    description: '管理側ページ',
}

export default function RootLayout({
    children,
}: {
    children: React.ReactNode
}) {
    return (
        <html lang="jp">
            <body className={inter.className}>
                {children}
            </body>
        </html>
    )
}
