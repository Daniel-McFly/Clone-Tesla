import { useTransform } from 'framer-motion';
import React from 'react';
import useWrapperScrool from '../Models/useWrapperScroll';


import { Container, Header, Logo, Burguer, Footer } from './styles';


const UniqueOverlay: React.FC = () => {
  const {scrollYProgress } = useWrapperScrool()
  
  const opacity = useTransform(scrollYProgress, [0.9, 1], [0, 1])

  return (
    <Container>
      <Header>
        <Logo />
        <ul>
          <li>
            
            <a href="../../html/account.html">Account</a>
          </li>
        </ul>
      </Header>
      <Footer style={{ opacity }}>
        <ul>
          <li>
            <a href="#">Clone Tesla</a>
          </li>
          <li>
            <a href="#">Feito por</a>
          </li>
          <li>
            <a href="#">Daniel</a>
          </li>
        </ul>
      </Footer>
    </Container>
  );
};

export default UniqueOverlay;
