import { motion } from 'framer-motion';
import styled from 'styled-components';
import { LogoSVG, BurgerSVG } from './iconVG'

export const Container = styled.div`
    position: sticky;
    top: 0;
    left:0;
    right:0;
    bottom: 0;

    ;
`;
export const Header = styled.header`
    position: fixed;
    top: 0;
    left:0;
    right:0;

    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    min-height: 52px;
    list-style: none;
        font-size: 14px;
        font-family: roboto, sans-serif;
        text-decoration: none;
        color: #393c41;
    li{
        list-style: none;
        font-size: 14px;
        font-family: roboto, sans-serif;
        text-decoration: none;
        color: #393c41;
    }
    a{
            text-decoration: none;
            color: #393c41;
            &:hover{
                color: #000;
            }
    }
`

export const Logo = styled(LogoSVG)`
    height: 22px;
    cursor: pointer;

`

export const Burguer = styled(BurgerSVG)`
    width: 30px;
    height: 30px;
    cursor: pointer;
    padding-right: 5px;
`

export const Footer = styled(motion.footer)`
    position: fixed;
    bottom: 0;
    left: 0px;
    right: 0px;

    ul{
        display:flex;
        flex-direction:column;
        align-items: center;
        justify-content: center;
    }
    li{
        list-style: none;
        font-size: 14px;
        font-family: roboto, sans-serif;

        & + li{
            margin: 10px 0 0;
        }
        a{
            text-decoration: none;
            color: #393c41;

            &:hover{
                color: #000;
            }
        }
    }

    margin-bottom: 30px;

    @media (min-width: 600px){
        margin-bottom: 38px;

        ul{
            flex-direction: row;

            li + li{
                margin:0 0 0 30px;
            }
        }
    }

`
