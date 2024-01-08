import { useEffect, useState } from "react"
import Url from "../../../ui/common/image/Url"

interface sliderPositionCircleClick {
    onClickHandler: (event: React.MouseEvent<HTMLButtonElement>) => void;
}

export default function Banner() {
    // TODO: 画像を差し込むまでのサンプル用配列
    const imageUrlList = [
        'https://images.microcms-assets.io/assets/5694fd90407444338a64d654e407cc0e/d0a8ffb534ed41fe9abbea3fa482b079/%E3%80%901205%E5%9B%BD%E5%86%85%E3%83%97%E3%83%AC%E3%82%B9%E7%94%A8%E3%80%91winterdate2022goods_voice_%E3%83%95%E3%82%9A%E3%83%AC%E3%82%B9_JP%E8%B2%A9%E5%A3%B2%E9%96%8B%E5%A7%8B%2B.png?fit=clip&w=800&dpr=2',
        'https://images.microcms-assets.io/assets/5694fd90407444338a64d654e407cc0e/10912a8ccf064bc59129db8794f3e6c8/%E4%B8%83%E6%AC%A1%E5%85%83%E7%94%9F%E5%BE%92%E4%BC%9A%EF%BC%81.png?w=960&fm=webp',
        'https://newsatcl-pctr.c.yimg.jp/t/amd-img/20231201-00000002-anmanmv-000-1-view.jpg?pri=l&w=640&h=360&exp=10800',
        'https://prcdn.freetls.fastly.net/release_image/30865/742/30865-742-e08a1deb2dff1017c3a5858a5badae9f-1920x1080.png?format=jpeg&auto=webp&quality=85%2C65&width=1950&height=1350&fit=bounds',
        'https://animeanime.jp/imgs/ogp_f/639058.jpg',
        'https://prcdn.freetls.fastly.net/release_image/30865/624/30865-624-0bbf5b3b713ff9ab22b6c355938e9136-1920x1080.png?format=jpeg&auto=webp&quality=85%2C65&width=1950&height=1350&fit=bounds',
    ]
    const [displayImageList, setDisplayImageList] = useState<string[]>([])

    const [displayImageKeyNumber, setDisplayImageKeyNumber] = useState<number>(0)
    const imageItemCount: number = imageUrlList.length - 1

    const sliderPositionCircleClick = (index: number) => {
        setDisplayImageKeyNumber(index)
    }

    useEffect(() => {
        const tempImageList: string[] = []

        tempImageList.push(imageUrlList[displayImageKeyNumber])

        if (displayImageKeyNumber !== imageItemCount && imageUrlList[displayImageKeyNumber] + 1) {
            tempImageList.push(imageUrlList[displayImageKeyNumber + 1])
        } else if(displayImageKeyNumber === imageItemCount){
            tempImageList.push(imageUrlList[0])
        }

        if(displayImageKeyNumber + 1 === imageItemCount){
            tempImageList.push(imageUrlList[0])
        } else if(displayImageKeyNumber !== imageItemCount && imageUrlList[displayImageKeyNumber] + 2) {
            tempImageList.push(imageUrlList[displayImageKeyNumber + 2])
        } else if(displayImageKeyNumber === imageItemCount){
            tempImageList.push(imageUrlList[1])
        }

        setDisplayImageList(tempImageList)
    },[displayImageKeyNumber])

    setTimeout(() => {
        if (displayImageKeyNumber == imageItemCount) {
            setDisplayImageKeyNumber(0)
        } else {
            setDisplayImageKeyNumber(displayImageKeyNumber + 1)
        }
    }, 4 * 1000)

    return (
        <div className="banner-block">
            <div className="banner-list-block">
                { displayImageList.map((imageUrl: string, index: number) => {
                    return (
                        <div key={index}>
                            <Url url={imageUrl} alt="バナー画像" className="banner-slider-image" />
                        </div>
                    )
                }) }
            </div>
            <div className="banner-slider-position-circle-block">
                <ul className="banner-slider-position-circle">
                    { imageUrlList.map((imageUrl: string, index: number) => {
                        if (displayImageKeyNumber === index) {
                            return (
                                <li className="active-li" key={index} onClick={() => sliderPositionCircleClick(index)}></li>
                            )
                        } else {
                            return (
                                <li key={index} onClick={() => sliderPositionCircleClick(index)}></li>
                            )
                        }
                    }) }
                </ul>
            </div>
        </div>
    )
}
