import CircleImageIcon from '@/components/ui/icon/CircleImageIcon'
import NormalText from '@/components/ui/text/NormalText'
import React from 'react'

export default function Header() {
    return (
        <div className='header'>
            <div className='icon flex-justify-items-center'>
                <div className='flex-justify-items-center gap15 margin-left'>
                    <NormalText text='山田太郎' fontSize={16} />
                    <CircleImageIcon
                        iconSize={50}
                        imageUrl='https://pbs.twimg.com/profile_images/1642144966351921152/w5uuMalY_400x400.jpg'
                    />
                </div>
            </div>
        </div>
    )
}
