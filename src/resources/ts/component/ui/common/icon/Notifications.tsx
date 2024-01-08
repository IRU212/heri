import NotificationsIcon from '@mui/icons-material/Notifications';

type Props = {
    className: string
    size: string
}

export default function Notifications(props: Props) {
    return (
        <NotificationsIcon
            className={props.className}
            style={{
                fontSize: `${props.size}px`
            }}
        />
    )
}
