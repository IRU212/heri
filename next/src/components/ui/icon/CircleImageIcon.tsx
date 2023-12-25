type Props = {
    iconSize: number
    imageUrl: string
}

export default function CircleImageIcon({iconSize, imageUrl}: Props) {
    return (
        <div className='circle-cover hover'
            style={{
                width: iconSize,
                height: iconSize,
            }}
        >
            <img className='image circle' src={imageUrl} alt="アイコン" />
        </div>
    )
}
